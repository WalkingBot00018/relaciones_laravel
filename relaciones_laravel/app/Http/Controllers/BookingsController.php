<?php

namespace App\Http\Controllers;
use App\Models\Bookings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index(){
        $reservas = Bookings::all();
        return view('reserva.index', ['reservas'=>$reservas]);
    }

    public function create()
    {
        return view("reserva.create");
    }


    public function store(Request $request)
    {

        Bookings::create($request->all());

    // Carga la relación 'habitacion' en lugar de 'reservas'
        

        return redirect()->route("reserva.index")->with("success", "Reserva registrada exitosamente");
        
    }
    public function show($id)
{
    $reservas = Bookings::find($id);

    if (!$reservas) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('reserva.index')->with('error', 'reserva no encontrado');
    }

    return view('reserva.shows', ['reservas' => $reservas]);
}


public function edit($id)
    {
        $reservas = Bookings::find($id);
        return view('reserva.edit', compact('reservas'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Bookings::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/reservas')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $reservas = Bookings::find($id);
        $reservas->delete(); 
        return redirect('/reservas')->with('success', 'reserva eliminado correctamente');
        
}

}

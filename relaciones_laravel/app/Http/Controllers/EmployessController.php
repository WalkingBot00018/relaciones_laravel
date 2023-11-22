<?php

namespace App\Http\Controllers;
use App\models\Employess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployessController extends Controller
{
    public function index(){
        
        $empleados = Employess::with('users')->get();
        return view('employee.index', ['empleado' => $empleados]);
    }

    public function create()
    {
        return view("employee.create");
    }


    public function store(Request $request)
    {

        Employess::create($request->all());
        
        $empleado = Employess::with('users')->get();

        return redirect()->route("employee.index")->with("success","empleado registrado exitosamente");
        
    }

    public function show($id)
{
    $empleados = Employess::find($id);

    if (!$empleados) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('employee.index')->with('error', 'empleado no encontrado');
    }

    return view('employee.shows', ['empleados' => $empleados]);
}

    public function edit($id)
    {
        $empleados = Employess::find($id);
        return view('employee.edit', compact('empleados'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Employess::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/employee')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $empleados = Employess::find($id);
        $empleados->delete(); 
        return redirect('/employee')->with('success', 'empleado eliminado correctamente');
        
    }
}

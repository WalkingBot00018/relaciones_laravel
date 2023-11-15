<?php

namespace App\Http\Controllers;
use App\models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function create()
    {
        return view("user.create");
    }


    public function store(Request $request)
    {

        User::create($request->all());
        
        $users = User::with('roles')->get();

        return redirect()->route("user.index")->with("success","usuario registrado exitosamente");
        
    }
}



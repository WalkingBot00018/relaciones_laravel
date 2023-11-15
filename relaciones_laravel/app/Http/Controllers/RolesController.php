<?php

namespace App\Http\Controllers;
use App\Models\roles;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $rol = roles::all();
        return view("role.index", compact("rol"));
    }


    public function create()
    {
        return view("role.create");
    }

    public function store(Request $request)
    {

        roles::create($request->all());


        return redirect()->route("role.index")->with("success","rol exitoso");
    }
}

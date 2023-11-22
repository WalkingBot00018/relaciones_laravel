@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/cliente.css') }}"> 
<a href="{{ route('employee.index') }}" class="btn btn-secondary">regresar</a>
<form method="post" action="{{ route('employee.store') }}">

    @csrf
    
    <label for="">Numero documento: </label>
    <input type="text" name="nro_doc"/>

    <label for="">direccion de la casa: </label>
    <input type="text" name="direccion_casa"/>

    <label for="">trabajo: </label>
    <input type="text" name="trabajo"/>

    <label for="">salario basico: </label>
    <input type="text" name="salario_basico"/>

    <label for="">Fecha de admision: </label>
    <input type="date" name="fecha_admision"/>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection
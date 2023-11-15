@extends('layouts.app')

@section('content')
<a href="{{ route('clientes.index') }}">regresar</a>
<form method="post" action="{{ route('clientes.store') }}">

    @csrf
    
    <label for="">Nombre de cliente: </label>
    <input type="text" name="nombre"/>

    <label for="">Apellido del cliente: </label>
    <input type="text" name="apellido"/>

    <label for="">Correo: </label>
    <input type="text" name="correo"/>

    <label for="">Telefono: </label>
    <input type="text" name="telefono"/>

    <label for="">Numero de documento: </label>
    <input type="text" name="nro_doc"/>

    <input type="submit" value="Create"/>

</form>

@endsection
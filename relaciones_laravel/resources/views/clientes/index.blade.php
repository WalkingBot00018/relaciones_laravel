@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/cliente.css') }}"> 
<a href="{{ route('clientes.create') }}" class="btn btn-secondary">Create new client</a>
=======
<a href="{{ route('clientes.create') }}">Create new client</a>
>>>>>>> 441728feab20ba93acc95474e8d92d560678e2ec
@forelse ($cliente as $clientes)
    <li>
        <p>{{ $clientes->nombre }} -- {{ $clientes->apellido }} -- {{ $clientes->correo }} -- {{ $clientes->telefono }} -- {{ $clientes->nro_doc }} -- {{ $clientes->users ? $clientes->users->nombre_usuario : 'sin nada' }}</p>
    </li>
@empty
    <h6>No hay datos</h6>
@endforelse
@endsection
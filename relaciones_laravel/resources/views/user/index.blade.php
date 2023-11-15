@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/users.css') }}"> 
<a href="{{ route('user.create') }}">Create new user</a>
@forelse ($users as $user)
    <li>
        <p>{{ $user->nro_doc }} -- {{ $user->nombre_usuario }} -- {{ $user->email }} -- {{ $user->roles ? $user->roles->nombre_rol : 'sin rol' }}</p>
    </li>
@empty
    <h6>No hay datos</h6>
@endforelse
@endsection


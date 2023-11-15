@extends('layouts.app')

@section('content')
    <a href="{{ route('clientes.create') }}">Create new client</a>

    @forelse ($cliente as $clientes)
        <li>
            <p>{{ $clientes->nombre }}</p>

            {{-- Iterar sobre los usuarios asociados con el rol --}}
            @if ($clientes->users)
                @forelse ($clientes->users as $user)
                    <p>{{ $user->nombre_usuario }}</p>
                @empty
                    <p>No hay usuarios asociados a este cliente</p>
                @endforelse
            @else
                <p>No hay usuarios asociados a este cliente</p>
            @endif
        </li>
    @empty
        <h6>No hay datos</h6>
    @endforelse
@endsection

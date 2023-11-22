@extends('layouts.app')

@section('content')
<a href="{{ route('employee.create') }}">Crear nuevo employee</a>

<table>
    <thead>
        <tr>
            <th>Numero documento</th>
            <th>direccionde la casa</th>
            <th>trabajo</th>
            <th>salario basico</th>
            <th>fecha admision</th>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($empleado as $empleados)
            <tr>
                <td>{{ $empleados->nro_doc }}</td>
                <td>{{ $empleados->direccion_casa }}</td>
                <td>{{ $empleados->trabajo }}</td>
                <td>{{ $empleados->salario_basico }}</td>
                <td>{{ $empleados->fecha_admision }}</td>
                <td>{{ $empleados->users ? $empleados->users->nombre_usuario : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('employee.shows', $empleado->id) }}">Ver</a>
                    <a href="{{ route('employee.edit', $empleados->id) }}">Editar</a>
                    <form method="POST" action="{{ route('employee.destroy', $empleados->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection

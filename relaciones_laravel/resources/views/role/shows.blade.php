@if ($roles)
    <h1>ROL DETAILS</h1>
    <p>Nombre Rol: {{ $roles->nombre_rol }}</p>
    
    <a href="{{ route('role.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif

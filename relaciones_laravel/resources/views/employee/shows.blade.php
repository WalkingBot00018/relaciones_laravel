@if ($empleados)
    <h1>employee DETAILS</h1>
    <p>Numero documento: {{ $empleados->nro_doc }}</p>
    <p>direccion de la casa: {{ $empleados->direccion_casa }}</p>
    <p>trabajo: {{ $empleados->trabajo }}</p>
    <p>salario basico: {{ $empleados->salario_basico }}</p>
    <p>fecha de admision: {{ $empleados->fecha_admision }}</p>   
    <a href="{{ route('employee.index') }}">Volver al Listado</a>
@else
    <p>employee no encontrado</p>
@endif

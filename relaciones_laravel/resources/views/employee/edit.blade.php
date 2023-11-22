<h1>Editar cliente</h1>
<form method="POST" action="{{ route('employee.update', $empleados->id) }}">
    @csrf
    @method('PUT')

    <label for="">Numero documento: </label>
    <input type="text" name="nro_doc" value="{{ $empleados->nro_doc }}"/>

    <label for="">direccion de la casa: </label>
    <input type="text" name="direccion_casa" value="{{ $empleados->direccion_casa }}"/>

    <label for="">trabajo: </label>
    <input type="text" name="trabajo" value="{{ $empleados->trabajo }}"/>

    <label for="">salario basico: </label>
    <input type="text" name="salario_basico" value="{{ $empleados->salario_basico }}"/>

    <label for="">fecha admisioon: </label>
    <input type="date" name="fecha_admision" value="{{ $empleados->fecha_admision }}"/>

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('employee.shows', $empleados->id) }}">Ver Detallesv</a>
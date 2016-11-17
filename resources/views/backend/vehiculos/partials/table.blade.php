<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Placa</th>
        <th>Tipo</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Ultima Modificación</th>
        <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($vehiculos as $vehiculo)
        <tr data-id="{{ $vehiculo->id }}">
            <td> {{ $vehiculo->id }}</td>
            <td> {{ $vehiculo->placa }}</td>
            <td> {{ $vehiculo->tipo }}</td>
            <td> {{ $vehiculo->estado }}</td>
            <td> {{ $vehiculo->created_at }}</td>
            <td> {{ $vehiculo->updated_at }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('ambulancias.edit', $vehiculo) }}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
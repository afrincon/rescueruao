<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Servicio</th>
        <th>Fecha de Creación</th>
        <th>Ultima Modificación</th>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
        <tr data-id="{{ $servicio->id }}">
            <td> {{ $servicio->id }}</td>
            <td> {{ $servicio->tipo_servicio  }}</td>
            <td> {{ $servicio->created_at }}</td>
            <td> {{ $servicio->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
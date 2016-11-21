<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Genero</th>
        <th>Nombre de Usuario</th>
        <th>Correo</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Fecha de Cumpleaños</th>
        <th>Tipo de Sangre</th>
        <th>Altura</th>
        <th>Servicio de Salud</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Ultima Modificación</th>
        <th>Acciones</th>
    </thead>
    <tbody>
    @foreach($suscriptores as $suscriptor)
        <tr data-id="{{ $suscriptor->id }}">
            <td> {{ $suscriptor->id }}</td>
            <td> {{ $suscriptor->first_name  }}</td>
            <td> {{ $suscriptor->last_name  }}</td>
            <td> {{ $suscriptor->gender }}</td>
            <td> {{ $suscriptor->name }}</td>
            <td> {{ $suscriptor->email }}</td>
            <td> {{ $suscriptor->address }}</td>
            <td> {{ $suscriptor->phone }}</td>
            <td> {{ $suscriptor->birthdate }}</td>
            <td> {{ $suscriptor->bloodtype }}</td>
            <td> {{ $suscriptor->height }}</td>
            <td> {{ $suscriptor->health_service  }}</td>
            <td> {{ $suscriptor->estado  }}</td>
            <td> {{ $suscriptor->created_at }}</td>
            <td> {{ $suscriptor->updated_at }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('ambulancias.edit', $vehiculo) }}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
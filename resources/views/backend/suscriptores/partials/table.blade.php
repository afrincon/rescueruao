<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Genero</th>
        <th>Nombre de Usuario</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Estado</th>
        <th>Fecha de Creación</th>
        <th>Ultima Modificación</th>
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
            <td> {{ $suscriptor->phone }}</td>
            <td> {{ $suscriptor->estado  }}</td>
            <td> {{ $suscriptor->created_at }}</td>
            <td> {{ $suscriptor->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
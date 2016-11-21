{!! Form::open(['route' => 'suscriptores.store', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
{{ csrf_field() }}


<div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}" >
    <label for="nombres" class="control-label col-md-3">Nombres:</label>
    <div class="col-md-6">
        <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" autofocus >
    </div>


    @if ($errors->has('nombres'))
        <span class="help-block">
            <strong>{{ $errors->first('nombres') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}" >
    <label for="apellidos" class="control-label col-md-3">Apellidos:</label>
    <div class="col-md-6">
        <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" autofocus >
    </div>


    @if ($errors->has('apellidos'))
        <span class="help-block">
            <strong>{{ $errors->first('apellidos') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
    <label for="genero" class="control-label col-md-3">Sexo:</label>
    <div class="col-md-6">
        {!! Form::select('genero', [''=>'','Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null,  ['class' => 'form-control']) !!}
        @if ($errors->has('genero'))
            <span class="help-block">
                <strong>{{ $errors->first('genero') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
    <label for="name" class="control-label col-md-3">Nombre de Usuario:</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  >
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
    <label for="email" class="control-label col-md-3">Correo Electrónico:</label>
    <div class="col-md-6">
        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"  >
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="control-label col-md-3">Contraseña</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="control-label col-md-3">Confirmar Contraseña</label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
    <label for="direccion" class="control-label col-md-3" >Dirección</label>
    <div class="col-md-6">
        <input id="direccion" type="text" class="form-control" name="direccion">
        @if ($errors->has('direccion'))
            <span class="help-block">
                <strong>{{ $errors->first('direccion') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
    <label for="telefono" class="control-label col-md-3" >Teléfono</label>
    <div class="col-md-6">
        <input id="telefono" type="text" class="form-control" name="telefono">
        @if ($errors->has('telefono'))
            <span class="help-block">
                <strong>{{ $errors->first('telefono') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="telefono" class="control-label col-md-3" >Fecha de Nacimiento</label>
    <div class="col-md-6">
        <input id="nacimiento" type="text" class="form-control" name="nacimiento">
    </div>
</div>

<div class="form-group">
    <label for="sangre" class="control-label col-md-3" >Tipo de Sangre</label>
    <div class="col-md-6">
        <input id="sangre" type="text" class="form-control" name="sangre">
    </div>
</div>

<div class="form-group">
    <label for="altura" class="control-label col-md-3" >Altura</label>
    <div class="col-md-6">
        <input id="altura" type="text" class="form-control" name="altura">
    </div>
</div>

<div class="form-group">
    <label for="salud" class="control-label col-md-3" >Servicio de Salud</label>
    <div class="col-md-6">
        <input id="salud" type="text" class="form-control" name="salud">
    </div>
</div>

<div class="form-group col-sm-12 col-md-8">
    <button type="submit" class="btn btn-default">Crear Suscriptor</button>
    <a class="btn btn-default" href="{{ url('/suscriptores') }}" role="button">Salir</a>
</div>

{!! Form::close() !!}
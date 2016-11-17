@extends('layouts.app2')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Registro de Suscriptores</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-8 col-md-7">
              <div class="page-header">
                <h3>Asistencia de Ambulancias <br><small>Subtext for header</small></h3>
              </div>

              <div class="row thumbs">
                <div class="col-sm-12 col-md-6">
                  <div class="thumbnail">
                      <img src="holder.js/190x120">
                      <div class="caption">
                        <h4>Ambulancia Asistencial</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget malesuada diam</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="thumbnail">
                      <img src="holder.js/190x120">
                      <div class="caption">
                        <h4>Ambulancia no Asistencial</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget malesuada diam</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-5 register">
                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}" >
                        <label for="nombres" class="control-label">Nombres:</label>
                        <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" autofocus >

                        @if ($errors->has('nombres'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombres') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                        <label for="apellidos" class="control-label">Apellidos:</label>
                        <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" >
                        @if ($errors->has('apellidos'))
                        <span class="help-block">
                            <strong>{{ $errors->first('apellidos') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                        <label for="genero" class="control-label">Sexo:</label>
                        {!! Form::select('genero', [''=>'','Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null,  ['class' => 'form-control']) !!}
                        @if ($errors->has('genero'))
                        <span class="help-block">
                            <strong>{{ $errors->first('genero') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}" >
                        <label for="usuario" class="control-label">Nombre de Usuario:</label>
                        <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}"  >
                        @if ($errors->has('usuario'))
                        <span class="help-block">
                            <strong>{{ $errors->first('usuario') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Correo Electrónico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <label for="direccion" class="control-label" >Dirección</label>
                        <input id="direccion" type="text" class="form-control" name="direccion">
                        @if ($errors->has('direccion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono" class="control-label" >Teléfono</label>
                        <input id="telefono" type="text" class="form-control" name="telefono">
                        @if ($errors->has('telefono'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-default">Registrarse</button>


                </form>
            </div>
        </div>
@endsection

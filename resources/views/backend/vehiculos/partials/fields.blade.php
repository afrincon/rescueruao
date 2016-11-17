<div class="col-sm-12 col-md-12">
    <div class="form-group col-sm-12 col-md-12">
        {!! Form::label('descrpciones', 'Placa', array('class' => 'col-sm-3 col-md-1 control-label')); !!}
        <div class="col-sm-6 col-md-6">
            {!! Form::text('placa', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Placa', 'disabled' => 'disabled']); !!}
        </div>
    </div>
    <div class="form-group col-sm-12 col-md-12">
        {!! Form::label('descrpciones', 'Tipo', array('class' => 'col-sm-3  col-md-1  control-label')) !!}
        <div class="col-sm-6 col-md-6">
            {!! Form::select('tipo', ['tipo1' => 'Tipo 1', 'tipo2' => 'Tipo 2'], null,  ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group col-sm-12 col-md-12">
        {!! Form::label('descrpciones', 'Estado', array('class' => 'col-sm-3  col-md-1  control-label')) !!}
        <div class="col-sm-6 col-md-6">
            {!! Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], null,  ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group col-sm-12 col-md-8">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-primary" href="{{ url('/ambulancias') }}" role="button">Salir</a>
    </div>

</div>
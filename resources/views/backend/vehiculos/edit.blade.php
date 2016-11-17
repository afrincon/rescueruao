@extends('layouts.appmain')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edicion de Ambulancia</div>
        <div class="panel-body">
            @include('errors.errors')

            <div class="col-sm-12">
                {!! Form::model($vehiculo, ['route' => ['ambulancias.update', $vehiculo], 'method' => 'PUT' ]) !!}
                @include('backend.vehiculos.partials.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

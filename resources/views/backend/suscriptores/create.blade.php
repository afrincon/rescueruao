@extends('layouts.appmain')
@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Creación de Suscriptor</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    @include('errors.errors')
                </div>
                @if(Session::get('info'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('info') }}
                    </div>
                @endif
                <div class="col-sm-12">
                    @include('backend.suscriptores.partials.formulario')
                </div>
            </div>
        </div>
@endsection

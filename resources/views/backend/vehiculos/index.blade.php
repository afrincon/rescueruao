@extends('layouts.appmain')

@section('content')
    <h2 class="sub-header">Gestion de Ambulancias</h2>
    <div class="table-responsive">
        @include('backend.vehiculos.partials.table')
    </div>
@endsection

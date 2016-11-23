@extends('layouts.appmain')

@section('content')
    <h2 class="sub-header">Gestion de Servicios</h2>
    <div class="table-responsive">
        @include('backend.servicios.partials.table')
    </div>
@endsection

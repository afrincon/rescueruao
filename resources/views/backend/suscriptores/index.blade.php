@extends('layouts.appmain')

@section('content')
    <h2 class="sub-header">Gestion de Suscriptores</h2>
    <div class="table-responsive">
        @include('backend.suscriptores.partials.table')
    </div>
@endsection

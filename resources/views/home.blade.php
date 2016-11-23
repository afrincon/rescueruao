@extends('layouts.app')

@section('content')
<div class="container container-top">
    <div class="row">
        <div class="col-sm-10 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <example></example>

                <div class="panel-body">
                    {!! $mapa !!}
                    {!! $api !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

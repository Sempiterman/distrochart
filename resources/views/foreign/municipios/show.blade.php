@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    Ver informacion de {{ $municipality->name }}
                </div>

                <div class="panel-body">
                    <p><strong>No# Municipio: </strong> {{ $municipality->name }}</p>
                    <p><strong>Slug: </strong> {{ $municipality->slug }}</p>
                    <p><strong>Descripcion: </strong> {{ $municipality->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

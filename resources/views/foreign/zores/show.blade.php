@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('zores.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Ver informacion de {{ $zore->name }}
                </div>

                <div class="panel-body">
                    <p><strong>No# zore: </strong> {{ $zore->name }}</p>
                    <p><strong>Slug: </strong> {{ $zore->slug }}</p>
                    <p><strong>Descripcion: </strong> {{ $zore->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

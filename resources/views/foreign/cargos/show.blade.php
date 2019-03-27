@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('cargos.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Ver informacion de registro {{ $position->id }}
                </div>

                <div class="panel-body">
                    <p><strong>Cargo: </strong> {{ $position->name }}</p>
                    <p><strong>Slug: </strong> {{ $position->slug }}</p>
                    <p><strong>Descripcion del cargo: </strong> {{ $position->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

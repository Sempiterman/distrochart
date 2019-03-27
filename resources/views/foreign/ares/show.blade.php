@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URL::previous() }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro {{ $are->id }}
                </div>

                <div class="panel-body">
                    <p><strong>No# zore: </strong> {{ $are->name }}</p>
                    <p><strong>Slug: </strong> {{ $are->slug }}</p>
                    <p><strong>Descripcion: </strong> {{ $are->descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

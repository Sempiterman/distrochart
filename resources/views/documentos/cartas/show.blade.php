@extends('layouts.docs')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('cartas.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro de carta de notificacion  {{ $charter->folio }}
                </div>

                <div class="panel-body">
                    <p><strong>Folio: </strong> {{ $charter->folio }}</p>
                    <p><strong>ZORE: </strong>{{ $charter->zore_id }}</p>
                    <p><strong>ARE: </strong>{{ $charter->are_id }}</p>
                    <p><strong>Descripcion: </strong> {{ $charter->detalles }}</p>
                    <p><strong>Status: </strong> {{ $charter->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

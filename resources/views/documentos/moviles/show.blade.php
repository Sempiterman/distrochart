@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('moviles.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver registro de equipo con folio {{ $movil->folio }}
                    
                </div>

                <div class="panel-body">
                    <p><strong>NoEmpleado: </strong>{{ $movil->employ->numempleado }}</p>
                    <p><strong>Folio: </strong> {{ $movil->folio }}</p>
                    <p><strong>Audifonos: </strong> {{ $movil->audifonos }}</p>
                    <p><strong>Cargador: </strong> {{ $movil->cargador }}</p>
                    <p><strong>Cable: </strong> {{ $movil->cable }}</p>
                    <p><strong>Estado: </strong> {{ $movil->estado }}</p>
                    <p><strong>Bateria: </strong> {{ $movil->bateria }}</p>
                    <p><strong>Chip: </strong> {{ $movil->chip }}</p>
                    <p><strong>Display: </strong> {{ $movil->dysplay }}</p>
                    <p><strong>Detalles: </strong> {{ $movil->detalles }}</p>
                    <p><strong>Status: </strong> {{ $movil->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
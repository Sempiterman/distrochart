@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('equipos.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver registro de equipo con folio {{ $kit->folio }}
                </div>

                <div class="panel-body">
                    <p><strong>NoEmpleado: </strong>{{ $kit->employ->numempleado }}</p>
                    <p><strong>Nombre: </strong> {{ $kit->employ->name }} {{ $kit->employ->apellidop }} {{ $kit->employ->apellidom }}</p>
                    <p><strong>Chaleco: </strong> {{ $kit->chaleco }}</p>
                    <p><strong>Mochila: </strong> {{ $kit->mochila }}</p>
                    <p><strong>Gafete: </strong> {{ $kit->gafete }}</p>
                    <p><strong>Rotafolio: </strong> {{ $kit->rotafolio }}</p>
                    <p><strong>Manuales: </strong> {{ $kit->manuales }}</p>
                    <p><strong>Sombrero: </strong> {{ $kit->sombrero }}</p>
                    <p><strong>Portahojas: </strong> {{ $kit->portahojas }}</p>
                    <p><strong>Utileria: </strong> {{ $kit->utileria }}</p>
                    <p><strong>Detalles: </strong> {{ $kit->detalles }}</p>
                    <p><strong>Status: </strong> {{ $kit->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
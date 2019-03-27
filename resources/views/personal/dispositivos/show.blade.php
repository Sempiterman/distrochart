@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <a href="{{ route('dispositivos.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro {{ $device->id}}
                </div>

                <div class="panel-body">
                    <p><strong>IMEI: </strong> {{ $device->imei }}</p>
                    <p><strong>Marca: </strong> {{ $device->marca }}</p>
                    <p><strong>No. Telefono: </strong> {{ $device->numtelchip }}</p>
                    <p><strong>Compania: </strong> {{ $device->compania }}</p>
                    <p><strong>Observaciones: </strong> {{ $device->observaciones }}</p>
                    <p><strong>Status: </strong> {{ $device->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

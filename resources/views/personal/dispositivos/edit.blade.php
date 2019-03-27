@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('dispositivos.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Editar registro de dispositivo movil
                </div>

                <div class="panel-body">
                    {!! Form::model($device, ['route' => ['dispositivos.update', $device->id], 'method' => 'PUT']) !!}
                        
                        @include('personal.dispositivos.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

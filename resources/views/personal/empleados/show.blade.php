@extends('layouts.personal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('personal.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro de personal con numero de empleado <strong>{{ $employ->numempleado }}</strong>
                </div>

                <div class="panel-body">
                    <p><strong>Nombre: </strong> {{ $employ->name }} {{ $employ->apellidop }} {{ $employ->apellidom }}</p>
                    <p><strong>Direccion: </strong> {{ $employ->direccion }}</p>
                    <p><strong>Telefono: </strong>{{ $employ->telefono }}</p>
                    {{-- <p><strong>Municipio</strong>
                        @foreach($municipalities as $municipality)
                        {{ $municipality->name }}
                        @endforeach
                    </p> --}}
                    {{-- <p><strong>Municipio</strong>{{ $employ->municipality->name }}</p> --}}
                    <p><strong>Correo: </strong>{{ $employ->correo }}</p>
                    <p><strong>Status: </strong>{{ $employ->status }}</p>
                    {{-- <p><strong>CURP: </strong>{{ $employ->curp }}</p>
                    <p><strong>RFC: </strong>{{ $employ->rfc }}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

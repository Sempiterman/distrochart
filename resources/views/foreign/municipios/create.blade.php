@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('municipios.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Crear nuevo registro de municipio
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'municipios.store']) !!}
                        
                        @include('foreign.municipios.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

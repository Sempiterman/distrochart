@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('cuentas.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nuevo registro de cuenta
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'cuentas.store']) !!}
                        
                        @include('personal.cuentas.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
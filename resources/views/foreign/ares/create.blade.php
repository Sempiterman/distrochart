@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URL::previous() }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nuevo registro de area de respondabilidad
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'ares.store']) !!}
                        
                        @include('foreign.ares.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.docs')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('cartas.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nuevo registro de carta de notificacion
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'cartas.store', 'files' => true]) !!}
                        
                        @include('documentos.cartas.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

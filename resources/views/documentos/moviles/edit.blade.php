@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('moviles.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Editar registro de equipo
                </div>

                <div class="panel-body">
                    {!! Form::model($movil, ['route' => ['moviles.update', $movil->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('documentos.moviles.partials.update')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

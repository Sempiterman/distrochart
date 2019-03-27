@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('cargos.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Editar registro de area de responsabilidad
                </div>

                <div class="panel-body">
                    {!! Form::model($position, ['route' => ['cargos.update', $position->id], 'method' => 'PUT']) !!}
                        
                        @include('foreign.cargos.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

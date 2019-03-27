@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('zores.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Editar registro de zona de responsabilidad
                </div>

                <div class="panel-body">
                    {!! Form::model($zore, ['route' => ['zores.update', $zore->id], 'method' => 'PUT']) !!}
                        
                        @include('foreign.zores.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

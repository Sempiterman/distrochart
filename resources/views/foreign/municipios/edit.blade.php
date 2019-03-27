@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar registro de municipio
                </div>

                <div class="panel-body">
                    {!! Form::model($municipality, ['route' => ['municipios.update', $municipality->id], 'method' => 'PUT']) !!}
                        
                        @include('foreign.municipios.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

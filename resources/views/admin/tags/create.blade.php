@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('tags.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear etiqueta
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'tags.store']) !!}
                        
                        @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

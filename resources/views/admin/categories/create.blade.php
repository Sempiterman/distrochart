@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear categoría
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'categories.store']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

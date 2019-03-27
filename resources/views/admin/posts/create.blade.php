@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('posts.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nueva publicacion
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                        
                        @include('admin.posts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

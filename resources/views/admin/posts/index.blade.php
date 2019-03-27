@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            {{-- <button type="button" class="btn btn-sm btn-danger">Descargar PDF</button> --}}
                        {{ Form::open(['route' => 'posts.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Buscar por extracto']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'Buscar por cuerpo']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                            </div>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Lista de avisos para SE, CAE de la 06 junta Distrital de Tlaxiaco
                    <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Status</th>
                                <th>Cuerpo</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->excerpt }}</td>
                                <td>{{ $post->body }}</td>
                                <td width="10px">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $posts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

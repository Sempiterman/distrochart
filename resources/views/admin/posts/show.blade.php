@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URL::previous() }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Detalles de aviso
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $post->name }}</p>
                    <p><strong>Categoria</strong> {{ $post->category->name }}</p>
                    <p><strong>Etiquetas</strong>
                        @foreach($post->tags as $tag)
                        {{ $tag->name }}
                        @endforeach
                    </p>
                    <p><strong>Descripción</strong> {{ $post->body }}</p>
                    <p><strong>Cuerpo</strong> {{ $post->excerpt }}</p>
                    <p><strong>Status</strong> {{ $post->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

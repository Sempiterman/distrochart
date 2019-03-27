@extends('layouts.blade')
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instituto Nacional Electoral</title>
    <!-- Bootstrap core CSS -->
    <link   href="larastrap/bootstrap.min.css" rel="stylesheet">
    <link   href="larastrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="larastrap/ie-emulation-modes-warning.js.download"></script>
    <link   href="larastrap/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper col-md-12 col-md-offset-">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/')  }}">INE</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Acerca de</a></li>
                <li><a href="{{ route('contactos') }}">Contactos</a></li>
                <li class="active"><a href="{{ route('blog') }}">Avisos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        {{-- <a href="{{ route('login') }}"><button type="button" class="btn btn-xs btn-success">Log in</button></a> --}}
                    </li>
                </ul>

            </div>
          </div>
        </nav>

      </div>
    </div>
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">

            <h1>{{ $post->name }}</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Categoría 
                    <a href="{{ route('category', $post->category->slug) }}">
                        {{ $post->category->name }}
                    </a>
                </div>

                <div class="panel-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif
                    
                    {{ $post->excerpt }}
                    <hr>
                    {!! $post->body !!}
                    <hr>

                    Etiquetas
                    @foreach($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('footer')
<footer>
        <section><div class="row">
      
      <div class="col-xs-4 ">
      <b><h3 align="center">INE</h3></b>
        <br>
        © Derechos Reservados, Instituto Nacional Electoral, México.
      </div>

      <div class="col-xs-4 ">
      <b><h3 align="center">Oficinas centrales:</h3></b>
        <br>
        Viaducto Tlalpan No. 100 Col. Arenal Tepepan, Delegación Tlalpan, C.P. 14610, Ciudad de México.
      </div>

      <div class="col-xs-4 ">
      <b><h3 align="center">Llámanos:</h3></b>
        <br>
        Desde cualquier parte del país sin costo: <b>01 800 433 2000</b>.<br>
Desde Estados Unidos sin costo: <b>1 (866) 986 8306</b>.<br>
Desde otros países por cobrar: <b>+52 (55) 5481 9897</b>.<br>
      </div>
      </section>
      </footer>
@endsection
    
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src={{ asset('larastrap/jquery.min.js.download') }}></script>
    <script>window.jQuery || document.write('<script asset{{ ('larastrap/jquery.min.js') }}><\/script>')</script>

    <script src="{{ asset('larastrap/bootstrap.min.js.download') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('larastrap/holder.min.js.download') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="larastrap/ie10-viewport-bug-workaround.js.download"></script>
  
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html> --}}
















{{-- 

 --}}
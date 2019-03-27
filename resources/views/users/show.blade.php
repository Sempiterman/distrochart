@extends('layouts.blade')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cuentas - graficas</title>
    {!! Charts::styles() !!}
</head>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <body>
    <br><br><br class="featurette-divider">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-sm ">Regresar</button></a>
                    Usuario
                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $user->name }}</p>
                    <p><strong>Email</strong>      {{ $user->email }}</p>
                    <p><strong>Email</strong>      {{ $user->password }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
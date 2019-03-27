@extends('layouts.blade')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Empleados - graficas</title>
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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Empleados</a></li>
            <li><a href="{{ url('chartaccount') }}">Cuentas</a></li>
            <li><a href="{{ url('chartdevices') }}">Dispositivos Moviles</a></li>
            <li><a href="{{ url('chartcharter') }}">Cartas de notificacion</a></li>
            <li><a href="{{ url('chartmovil') }}">Moviles</a></li>
            <li><a href="{{ url('chartkit') }}">Equipos</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<body>
	<br><br><br class="featurette-divider">

	<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="badge">STATUS DE EMPLEADOS</span>
                </div>

                <div class="panel-body">
                    <div class="app">
						<center>
							{!! $chart->html() !!}
						</center>
					</div>
					{!! Charts::scripts() !!}
					{!! $chart->script() !!}
                </div>
            </div>
        </div>
    </div>
	</div>
	</body>
</html>
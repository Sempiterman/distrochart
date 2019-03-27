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
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('chartemploy') }}">Empleados</a></li>
            <li><a href="{{ url('chartaccount') }}">Cuentas</a></li>
            <li><a href="{{ url('chartdevices') }}">Dispositivos Moviles</a></li>
            <li><a href="{{ url('chartcharter') }}">Cartas de notificacion</a></li>
            <li><a href="{{ url('chartmovil') }}">Moviles</a></li>
            <li class="active"><a href="{{-- {{ url('chartkit') }} --}}">Equipos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<body>
	<br><br><br class="featurette-divider">

	<body>

		<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="badge">STATUS DE EQUIPOS DE SE, CAE PARA PE.</span>
                </div>

                <div class="panel-body">
                    <div class="app">
						<center>
							{!! $chart->html() !!}
						</center>
					</div>
		{{--  --}}
					{!! Charts::scripts() !!}
					{!! $chart->script() !!}
                </div>
            </div>

        </div>
    </div>
</div>
	</body>
</html>
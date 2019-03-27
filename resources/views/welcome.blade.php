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
    {{-- <link src="{{ asset('larastrap/bootstrap.min.css') }}"></link> --}}
    <link   href="larastrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    {{-- <link src="{{ asset('larastrap/ie10-viewport-bug-workaround.css') }}"></link> --}}
    <script src="larastrap/ie-emulation-modes-warning.js.download"></script>
    {{-- <link src="{{ asset('larastrap/ie-emulation-modes-warning.js.download') }}"></link> --}}
    <link   href="larastrap/carousel.css" rel="stylesheet">
    {{-- <link src="{{ asset('larastrap/carousel.js') }}"></link> --}}
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">

      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top ">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/')  }}"><code>INE</code></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Acerca de</a></li>
                <li><a href="{{ route('contactos') }}">Contactos</a></li>
                <li><a href="{{ route('blog') }}">Avisos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                      @guest
                        @else
                        
                        @endguest
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-xs btn-success">Log in</button></a>
                        
                    </li>
                </ul>

            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/ok01.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenido.</h1>
              <p>Como siempre es un gusto saber que visitas nuestro sitio para mantenerte informado de nuestro organismo puedes consultar la informacion necesaria en la seccion de <code>inicio</code> donde podras ver informacion relacionada a nuestra institucion.</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('inicio') }}" role="button">Leer mas.</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="img/ok02.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Acerca de.</h1>
              <p>El Instituto Nacional Electoral de la 06 junta distrital esta conformado por un organismo estructurado que desempena una amplia funcion dentro del distrito electoral.</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('nosotros') }}" role="button">Leer mas.</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/ok03.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Contactos.</h1>
              <p>Para saber mas acerca de nosotros ve a <code>contactos</code> donde te brindaremos toda la informacion necesaria para que puedas ponerte en contacto con nosotros directamente y nuestro personal de recursos humanos del departamento de capacitacion y asistencia electoral.</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('contactos') }}" role="button">Ver mas.</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

      <!-- START THE FEATURETTES -->
      <div class="container">
        <div class="col-md-7">
          <h2 class="featurette-heading">Instituto Nacional Electoral.</h2>
          <p class="lead">El INE organiza procesos electorales libres, equitativos y confiables para garantizar el ejercicio de los derechos político-electorales de la ciudadanía y contribuir al desarrollo de la vida democrática de México.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="img/logo.jpg" data-holder-rendered="true">
        </div>
      </div>

      <div class="container">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Tramita tu credencial.</h2>
<p class="lead">Aun no has tramitado tu credencial de elector? Puedes acudir a oficinas ve nuestra seccion de <a href="{{ route('contactos') }}"><code>contactos</code></a>.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="img/credencial.jpg" data-holder-rendered="true">
        </div>
      </div>

      <div class="container">
        <div class="col-md-7">
          <h2 class="featurette-heading">Renueva tu credencial.</h2>
          <p class="lead">Aun no has renovado tu credencial de elector? Que esperas puedes acudir a las oficinas mas cercana recuerda que es gratis</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="img/ine.png" data-holder-rendered="true">
        </div>
      </div>
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
  

</body></html>
@extends('layouts.blade')
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Instituto Nacional Electoral</title>
      <style>
      #sha{
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
  }
  
  
  </style>
    </style>
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
                <li class="active"><a href="{{ route('contactos') }}">Contactos</a></li>
                <li><a href="{{ route('blog') }}">Avisos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
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
          <img class="first-slide" src="img/ok02.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Contactos</h1>
              <p>Si deseas contactarnos no olvides visitar nuestra seccion de <code>contactos</code> donde te brindaremos toda la informacion necesaria para que puedas ponerte en contacto con nosotros directamente y nuestro personal de recursos humanos del departamento de capacitacion y asistencia electoral</p>
              {{-- <p><a class="btn btn-lg btn-primary" href="{{ route('contactos') }}" role="button">Contactos</a></p> --}}
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="img/ok03.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Acerca de.</h1>
              <p>El Instituto Nacional Electoral de la 06 junta distrital .</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('nosotros') }}" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/ok04.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Browse gallery</a></p>
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
      
      {{-- CIRCLE IMAGE --}}

      <div class="container" id="sha">
    <div class="row">
    
        <div class="col-xs-12">
          <br />
          <h2><p class="text-center">Contactos</p></h2>
          <br />
        </div>
    </div>
    <!--Primer bloque izquierda-->
    <div class="row">
      <!--imagen responsive-->
      <div class="col-xs-12 col-sm-3">
          <a href="https://www.facebook.com/INETLAXIACO06/"><center><img src="img/facebook.png" class="img-circle" width="150" height="150"></center></a>
      </div>
        <!--Texto del contenido-->
        <div class="col-xs-12 col-sm-3">
          <br/>
            <strong>Sigue nuestras actividades en las redes sociales</strong>
            <small><p>Enterate de nuestras actividades mas recientes y esta al dia con nosotros.</p>
            </small>
        </div>
        <br>
        <!--imagen responsive-->
        <div class="col-xs-12 col-sm-3">
          <a href="https://www.google.com/maps/place/INSTITUTO+NACIONAL+ELECTORAL/@17.2650378,-97.6785893,15z/data=!4m2!3m1!1s0x0:0xcb4de10f2655156f?ved=2ahUKEwjA0_3Eqc7gAhXFzVQKHS9VA08Q_BIwD3oECAMQCA">
          <center><img src="img/localization.png" class="img-circle" width="150" height="150"></center>
          </a>
          
        </div>
        <!--Texto del contenido-->
        <div class="col-xs-12 col-sm-3">
            <strong>Acude a nuestras oficinas</strong>
            <small>
              <p>Visita nuestras oficinas donde podremos darte la atencion necesaria y adecuada para tramitar tus documentos relacionados con la institucion
                
            </small>
        </div>
    </div>
    
    <!--Segundo bloque derecha-->
    <div class="row">
      <!--imagen responsive-->
      <div class="col-xs-12 col-sm-3">
          <center><img src="img/ine02.jpg" class="img-circle" width="150" height="150"></center>
        </div>
        <!--Texto del contenido-->
        <div class="col-xs-12 col-sm-3">
          
          <strong>Oficinas</strong>
            <small>
              <p>Lunes a sabado</p>
              <p> 8:00–20:00</p>
              <p>Numero de oficinas:</p>
              <p>9535520454</p>
            </small>
        </div>
        <br>
        <!--imagen responsive-->
        <div class="col-xs-12 col-sm-3">
          <center><img src="img/ine01.jpg" class="img-circle" width="150" height="150"></center>
        </div>
        <!--Texto del contenido-->
        <div class="col-xs-12 col-sm-3">
            <strong>Direccion</strong>
            <small>
              <p>Fray Caldelas 16, Benito Juárez, 69800 Tlaxiaco, Oax., México.</p>
            </small>
        </div>
  </div>
</div>
      {{--  --}}


      <!-- FOOTER -->
      {{-- <footer>
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
      </footer>   --}}


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
</body>
</html>
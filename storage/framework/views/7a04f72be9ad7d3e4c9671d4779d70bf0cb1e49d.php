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
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">INE</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
                <li class="active"><a href="<?php echo e(route('nosotros')); ?>">Acerca de</a></li>
                <li><a href="<?php echo e(route('contactos')); ?>">Contactos</a></li>
                <li><a href="<?php echo e(route('blog')); ?>">Avisos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-xs btn-success">Log in</button></a>
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
          <img class="first-slide" src="img/ok07.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Contactos</h1>
              <p>Si deseas contactarnos no olvides visitar nuestra seccion de <code>contactos</code> donde te brindaremos toda la informacion necesaria para que puedas ponerte en contacto con nosotros directamente y nuestro personal de recursos humanos del departamento de capacitacion y asistencia electoral</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo e(route('contactos')); ?>" role="button">Contactos</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="img/ok08.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Acerca de.</h1>
              <p>El Instituto Nacional Electoral de la 06 junta distrital .</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo e(route('nosotros')); ?>" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/ok01.jpg" alt="Third slide">
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
      <!-- /END THE FEATURETTES -->
      <div class="container">
            <div class="jumbotron">
        <h1>Una nueva autoridad electoral de carácter nacional.</h1>
        <p>A partir de la reforma constitucional de 2014, el INE evolucionó hacia una Institución de carácter nacional a partir de la cual los estándares con los que se organizan los comicios electorales, se homologaron para fortalecer la democracia electoral y garantizar el ejercicio de los derechos político - electorales de la ciudadanía.</p>

<p>Nuestros principios rectores son: legalidad, certeza, imparcialidad, objetividad, independencia y máxima publicidad, establecidos en el mandato legal que dio origen al IFE y que se enriquecieron con el INE.</p>
</div>        
      </div>
      <div class="container">

<div class="container-fluid well">
    <section><div class="row">
      
      <div class="col-xs-4 "><h3>Como funciona el instituto</h3>
        <br><p align="justify" >
          La planeación en el INE se enmarca en el mandato de modernización de la gestión pública, con la finalidad de optimizar sus operaciones mediante la toma de decisiones que permitan obtener la máxima eficacia y eficiencia en su desempeño, la consecución de los objetivos institucionales y la mejora continua de sus procesos.</p>
      </div>
      
      <div class="col-xs-4 "><h3>¿Qué hace el INE?</h3>
      <br>
      <p align="justify">El INE es la máxima autoridad electoral del Estado Mexicano, que además de llevar a cabo las elecciones federales y emitir la Credencial para Votar, realiza una serie de actividades tanto al interior del instituto como para la ciudadanía.</p>
      </div>

      <div class="col-xs-4 "><h3>Nuestra Historia</h3>
        <br><p align="justify">
          La creación del Instituto Federal Electoral, en octubre de 1990, representó una modificación fundamental en el sistema político mexicano que ha contribuido en la construcción de la democracia en México.
        </p>
      </div>

    </div>
    </section>
    </div>        
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=<?php echo e(asset('larastrap/jquery.min.js.download')); ?>></script>
    <script>window.jQuery || document.write('<script asset<?php echo e(('larastrap/jquery.min.js')); ?>><\/script>')</script>

    <script src="<?php echo e(asset('larastrap/bootstrap.min.js.download')); ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo e(asset('larastrap/holder.min.js.download')); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="larastrap/ie10-viewport-bug-workaround.js.download"></script>
  </body></html>
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
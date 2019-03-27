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
                <li class="active"><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
                <li><a href="<?php echo e(route('nosotros')); ?>">Acerca de</a></li>
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
          <img class="first-slide" src="img/ok04.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Contactos</h1>
              <p>Si deseas contactarnos no olvides visitar nuestra seccion de <code>contactos</code> donde te brindaremos toda la informacion necesaria para que puedas ponerte en contacto con nosotros directamente y nuestro personal de recursos humanos del departamento de capacitacion y asistencia electoral</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo e(route('contactos')); ?>" role="button">Contactos</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="img/ok05.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Acerca de.</h1>
              <p>El Instituto Nacional Electoral de la 06 junta distrital .</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo e(route('nosotros')); ?>" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/ok06.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="<?php echo e(url('/')); ?>" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="<?php echo e(route('nosotros')); ?>" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img\ine02.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Credencial</h2>
          <p align="center">¿Qué es?</p>
          <p align="justify">
Es una identificación oficial que avala la ciudadanía mexicana, la emplean millones de personas para ejercer su derecho al voto en México y en el extranjero. </p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img\ine01.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Solicitud desde el extranjero</h2>
          <p align="justify">El INE, a través de la red de consulados y embajadas de la Secretaría de Relaciones Exteriores (SRE) te permite solicitar la Credencial para Votar desde el país donde residas. Debes preparar los documentos de identificación y hacer una cita en línea. </p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/educacion-civica.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Lista Nominal y Padrón Electoral</h2>
          <p>El Instituto pone a tu disposición las estadísticas sobre los ciudadanos que solicitaron en México su inscripción  al Padrón Electoral  y ya cuentan con su credencial para votar, así como los mexicanos que solicitaron su inscripción al mismo.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
     
    <div  id="myCarousel" class="jumbotron col-lg-12">
      <div class="container">
        <h1>Financiamiento de Actores Políticos</h1>
        <p>La rendición de cuentas es la obligación que tiene los partidos políticos y candidatos independientes de informar y explicar de manera transparente y clara los montos, uso y destino de los recursos que utilizan para sus actividades.

Destinamos una sección dentro de nuestro sitio web para dar todos los detalles sobre el tema de Fiscalización.</p>
        
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

</body>
</html>
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
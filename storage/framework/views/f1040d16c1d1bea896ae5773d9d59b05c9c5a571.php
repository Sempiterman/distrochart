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
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">INE</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
                <li><a href="<?php echo e(route('nosotros')); ?>">Acerca de</a></li>
                <li><a href="<?php echo e(route('contactos')); ?>">Contactos</a></li>
                <li class="active"><a href="<?php echo e(route('blog')); ?>">Avisos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        
                    </li>
                </ul>

            </div>
          </div>
        </nav>

      </div>
    </div>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">

            <h1><?php echo e($post->name); ?></h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Categoría 
                    <a href="<?php echo e(route('category', $post->category->slug)); ?>">
                        <?php echo e($post->category->name); ?>

                    </a>
                </div>

                <div class="panel-body">
                    <?php if($post->file): ?>
                        <img src="<?php echo e($post->file); ?>" class="img-responsive">
                    <?php endif; ?>
                    
                    <?php echo e($post->excerpt); ?>

                    <hr>
                    <?php echo $post->body; ?>

                    <hr>

                    Etiquetas
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('tag', $tag->slug)); ?>">
                        <?php echo e($tag->name); ?>

                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
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
<?php $__env->stopSection(); ?>
    
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
  


















<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
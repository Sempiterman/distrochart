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
                <li><a href="<?php echo e(route('nosotros')); ?>">Acerca de</a></li>
                <li><a href="<?php echo e(route('contactos')); ?>">Contactos</a></li>
                <li class="active"><a href="<?php echo e(route('blog')); ?>">Avisos</a></li>
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
    
    <!-- /.carousel -->
    
      

<?php $__env->startSection('content'); ?>
<br><br><br><br class="featurette-divider">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">

                <div class="panel-heading"><span class="label label-info"><?php echo e($post->name); ?></span></div>

                <div class="panel-body">
                    <?php if($post->file): ?>
                        <img src="<?php echo e($post->file); ?>" class="img-responsive">
                    <?php endif; ?>
                    <?php echo e($post->excerpt); ?>

                    <a href="<?php echo e(route('post', $post->slug)); ?>" class="pull-right">Leer más</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($posts->render()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
    
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=<?php echo e(asset('larastrap/jquery.min.js.download')); ?>></script>
    <script>window.jQuery || document.write('<script asset<?php echo e(('larastrap/jquery.min.js')); ?>></script>

    <script src="<?php echo e(asset('larastrap/bootstrap.min.js.download')); ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo e(asset('larastrap/holder.min.js.download')); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="larastrap/ie10-viewport-bug-workaround.js.download"></script>
  </body></html>
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
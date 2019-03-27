<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cuentas - graficas</title>
    <?php echo Charts::styles(); ?>

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
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Home</a>
        </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <body>
    <br><br><br class="featurette-divider">

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('usuarios.index')); ?>"><button type="button" class="btn btn-sm ">Regresar</button></a>
                    Usuario
                </div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     <?php echo e($user->name); ?></p>
                    <p><strong>Email</strong>      <?php echo e($user->email); ?></p>
                    <p><strong>Email</strong>      <?php echo e($user->password); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
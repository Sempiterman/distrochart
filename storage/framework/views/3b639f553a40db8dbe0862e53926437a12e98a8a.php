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
                    Listado de usuarios
                    <a href="<?php echo e(route('usuarios.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                
                                <td width="10px">
                                    <a href="<?php echo e(route('usuarios.show', $user->id)); ?>" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                
                                <td width="10px">
                                    <a href="<?php echo e(route('usuarios.edit', $user->id)); ?>" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['usuarios.destroy', $user->id], 
                                    'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    <?php echo Form::close(); ?>

                                </td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($users->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
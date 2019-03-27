<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <a href="<?php echo e(route('cuentas.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro <?php echo e($account->id); ?>

                </div>

                <div class="panel-body">
                    <p><strong>Usuario: </strong> <?php echo e($account->nameuser); ?></p>
                    
                    <p><strong>Nombre: </strong> <?php echo e($account->nombre); ?> <?php echo e($account->apellidop); ?> <?php echo e($account->apellidom); ?></p>
                    <p><strong>Correo: </strong><?php echo e($account->correo); ?></p>
                    <p><strong>Password: </strong> <?php echo e($account->password); ?></p>
                    <p><strong>No. Telefono: </strong> <?php echo e($account->nummoviline); ?></p>
                    <p><strong>Observaciones: </strong> <?php echo e($account->observaciones); ?></p>
                    <p><strong>Status: </strong> <?php echo e($account->status); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
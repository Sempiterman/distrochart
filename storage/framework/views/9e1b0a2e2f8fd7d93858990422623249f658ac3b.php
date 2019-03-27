<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('cartas.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro de carta de notificacion  <?php echo e($charter->folio); ?>

                </div>

                <div class="panel-body">
                    <p><strong>Folio: </strong> <?php echo e($charter->folio); ?></p>
                    <p><strong>ZORE: </strong><?php echo e($charter->zore_id); ?></p>
                    <p><strong>ARE: </strong><?php echo e($charter->are_id); ?></p>
                    <p><strong>Descripcion: </strong> <?php echo e($charter->detalles); ?></p>
                    <p><strong>Status: </strong> <?php echo e($charter->status); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.docs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
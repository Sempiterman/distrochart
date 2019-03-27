<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('zores.index')); ?>"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                    Ver informacion de <?php echo e($zore->name); ?>

                </div>

                <div class="panel-body">
                    <p><strong>No# zore: </strong> <?php echo e($zore->name); ?></p>
                    <p><strong>Slug: </strong> <?php echo e($zore->slug); ?></p>
                    <p><strong>Descripcion: </strong> <?php echo e($zore->descripcion); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
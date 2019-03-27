<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('cartas.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nuevo registro de carta de notificacion
                </div>

                <div class="panel-body">
                    <?php echo Form::open(['route' => 'cartas.store', 'files' => true]); ?>

                        
                        <?php echo $__env->make('documentos.cartas.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.docs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
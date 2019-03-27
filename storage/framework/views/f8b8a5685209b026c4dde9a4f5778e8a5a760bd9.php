<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('moviles.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Crear nuevo registro de entrega de moviles
                </div>

                <div class="panel-body">
                    <?php echo Form::open(['route' => 'moviles.store', 'files' => true]); ?>

                        
                        <?php echo $__env->make('documentos.moviles.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
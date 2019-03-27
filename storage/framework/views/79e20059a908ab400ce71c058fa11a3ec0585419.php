<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('dispositivos.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Editar registro de dispositivo movil
                </div>

                <div class="panel-body">
                    <?php echo Form::model($device, ['route' => ['dispositivos.update', $device->id], 'method' => 'PUT']); ?>

                        
                        <?php echo $__env->make('personal.dispositivos.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
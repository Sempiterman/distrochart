<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <a href="<?php echo e(route('dispositivos.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro <?php echo e($device->id); ?>

                </div>

                <div class="panel-body">
                    <p><strong>IMEI: </strong> <?php echo e($device->imei); ?></p>
                    <p><strong>Marca: </strong> <?php echo e($device->marca); ?></p>
                    <p><strong>No. Telefono: </strong> <?php echo e($device->numtelchip); ?></p>
                    <p><strong>Compania: </strong> <?php echo e($device->compania); ?></p>
                    <p><strong>Observaciones: </strong> <?php echo e($device->observaciones); ?></p>
                    <p><strong>Status: </strong> <?php echo e($device->status); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
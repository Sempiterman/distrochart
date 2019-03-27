<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('moviles.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver registro de equipo con folio <?php echo e($movil->folio); ?>

                    
                </div>

                <div class="panel-body">
                    <p><strong>NoEmpleado: </strong><?php echo e($movil->employ->numempleado); ?></p>
                    <p><strong>Folio: </strong> <?php echo e($movil->folio); ?></p>
                    <p><strong>Audifonos: </strong> <?php echo e($movil->audifonos); ?></p>
                    <p><strong>Cargador: </strong> <?php echo e($movil->cargador); ?></p>
                    <p><strong>Cable: </strong> <?php echo e($movil->cable); ?></p>
                    <p><strong>Estado: </strong> <?php echo e($movil->estado); ?></p>
                    <p><strong>Bateria: </strong> <?php echo e($movil->bateria); ?></p>
                    <p><strong>Chip: </strong> <?php echo e($movil->chip); ?></p>
                    <p><strong>Display: </strong> <?php echo e($movil->dysplay); ?></p>
                    <p><strong>Detalles: </strong> <?php echo e($movil->detalles); ?></p>
                    <p><strong>Status: </strong> <?php echo e($movil->status); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
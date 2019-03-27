<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('equipos.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver registro de equipo con folio <?php echo e($kit->folio); ?>

                </div>

                <div class="panel-body">
                    <p><strong>NoEmpleado: </strong><?php echo e($kit->employ->numempleado); ?></p>
                    <p><strong>Nombre: </strong> <?php echo e($kit->employ->name); ?> <?php echo e($kit->employ->apellidop); ?> <?php echo e($kit->employ->apellidom); ?></p>
                    <p><strong>Chaleco: </strong> <?php echo e($kit->chaleco); ?></p>
                    <p><strong>Mochila: </strong> <?php echo e($kit->mochila); ?></p>
                    <p><strong>Gafete: </strong> <?php echo e($kit->gafete); ?></p>
                    <p><strong>Rotafolio: </strong> <?php echo e($kit->rotafolio); ?></p>
                    <p><strong>Manuales: </strong> <?php echo e($kit->manuales); ?></p>
                    <p><strong>Sombrero: </strong> <?php echo e($kit->sombrero); ?></p>
                    <p><strong>Portahojas: </strong> <?php echo e($kit->portahojas); ?></p>
                    <p><strong>Utileria: </strong> <?php echo e($kit->utileria); ?></p>
                    <p><strong>Detalles: </strong> <?php echo e($kit->detalles); ?></p>
                    <p><strong>Status: </strong> <?php echo e($kit->status); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
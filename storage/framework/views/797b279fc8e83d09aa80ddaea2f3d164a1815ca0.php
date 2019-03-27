<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('cuentas.index')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Editar registro de cuenta de dispositivos moviles
                </div>

                <div class="panel-body">
                    <?php echo Form::model($account, ['route' => ['cuentas.update', $account->id], 'method' => 'PUT']); ?>

                        
                        <?php echo $__env->make('personal.cuentas.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
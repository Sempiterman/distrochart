<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="<?php echo e(url('movilespdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                            
                        <?php echo e(Form::open(['route' => 'moviles.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('folio', null, ['class' => 'form-control', 'placeholder' => 'Buscar por folio'])); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                            </div>
                        <?php echo e(Form::close()); ?>

                 </div>
                <div class="panel-heading">
                    Listado de moviles
                    <a href="<?php echo e(route('moviles.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Folio</th>
                                <th>Audifonos</th>
                                <th>Cargador</th>
                                <th>Cable USB</th>
                                <th>Estado</th>
                                <th>Bateria</th>
                                <th>Chip</th>
                                <th>Display</th>
                                <th>Detalles</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $movils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($movil->id); ?></td>
                                <td><?php echo e($movil->folio); ?></td>
                                <td><?php echo e($movil->audifonos); ?></td>
                                <td><?php echo e($movil->cargador); ?></td>
                                <td><?php echo e($movil->cable); ?></td>
                                <td><?php echo e($movil->estado); ?></td>
                                <td><?php echo e($movil->bateria); ?></td>
                                <td><?php echo e($movil->chip); ?></td>
                                <td><?php echo e($movil->dysplay); ?></td>
                                <td><?php echo e($movil->detalles); ?></td>
                                <td><?php echo e($movil->status); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('moviles.show', $movil->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('moviles.edit', $movil->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['moviles.destroy', $movil->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(url('acusemoviles/{$id}', $movil->id)); ?>" class="btn btn-sm btn-default">Acuse</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($movils->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
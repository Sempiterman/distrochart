<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="<?php echo e(url('cartaspdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        <?php echo e(Form::open(['route' => 'cartas.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

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
                    Listado de cartas de notificacion
                    <a href="<?php echo e(route('cartas.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>
                
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Folio</th>
                                <th>Detalles</th>
                                <th>Zore</th>
                                <th>Are</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $charters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($charter->id); ?></td>
                                <td><?php echo e($charter->folio); ?></td>
                                <td><?php echo e($charter->detalles); ?></td>
                                <td><?php echo e($charter->zore_id); ?></td>
                                <td><?php echo e($charter->are_id); ?></td>
                                <td><?php echo e($charter->status); ?></td>
                                
                                
                                </td>
                                
                                <td width="10px">
                                    <a href="<?php echo e(route('cartas.show', $charter->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('cartas.edit', $charter->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['cartas.destroy', $charter->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($charters->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.docs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
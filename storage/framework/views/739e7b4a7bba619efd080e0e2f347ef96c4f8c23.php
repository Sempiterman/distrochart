<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                        <a href="<?php echo e(url('arespdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        <?php echo e(Form::open(['route' => 'ares.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por numero de ARE'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Buscar por descripcion de ARE'])); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>

                            </div>
                        <?php echo e(Form::close()); ?>

                </div>
                <div class="panel-heading">
                    Listado de ARES
                    <a href="<?php echo e(route('ares.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>No# ARE</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $ares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $are): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($are->id); ?></td>
                                <td><?php echo e($are->name); ?></td>
                                <td><?php echo e($are->descripcion); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('ares.show', $are->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('ares.edit', $are->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['ares.destroy', $are->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($ares->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
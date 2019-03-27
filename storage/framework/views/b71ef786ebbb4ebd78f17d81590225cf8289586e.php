<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="<?php echo e(url('empleadospdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                            
                        <?php echo e(Form::open(['route' => 'personal.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('numempleado', null, ['class' => 'form-control', 'placeholder' => 'Buscar por numero de empleado'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por correo'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Buscar por telefono'])); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                            </div>
                        <?php echo e(Form::close()); ?>

                </div>
                <div class="panel-heading">
                    Listado de personal de proceso electoral
                    <a href="<?php echo e(route('personal.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>NoEmpleado</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Status</th>
                                
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $employs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employ->id); ?></td>
                                <td><?php echo e($employ->numempleado); ?></td>
                                <td><?php echo e($employ->name); ?> <?php echo e($employ->apellidop); ?> <?php echo e($employ->apellidom); ?></td>
                                <td><?php echo e($employ->direccion); ?></td>
                                <td><?php echo e($employ->telefono); ?></td>
                                <th><?php echo e($employ->correo); ?></th>
                                <th><?php echo e($employ->status); ?></th>
                                
                                <td width="10px">
                                    <a href="<?php echo e(route('personal.show', $employ->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('personal.edit', $employ->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['personal.destroy', $employ->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($employs->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.personal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
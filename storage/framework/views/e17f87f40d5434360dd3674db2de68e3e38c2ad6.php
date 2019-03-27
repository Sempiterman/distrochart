<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="<?php echo e(url('dispositivospdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>  
                        <?php echo e(Form::open(['route' => 'dispositivos.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('imei', null, ['class' => 'form-control', 'placeholder' => 'Buscar por IMEI'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por numero de chip'])); ?>

                            </div>
                            <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                        <?php echo e(Form::close()); ?>

                </div>
                <div class="panel-heading">
                    Listado de informacion de dispositivos moviles
                    <a href="<?php echo e(route('dispositivos.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>IMEI</th>
                                <th>Marca</th>
                                <th>No. de chip</th>
                                <th>Compania</th>
                                <th>Observaciones</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($device->id); ?></td>
                                <td><?php echo e($device->imei); ?></td>
                                <td><?php echo e($device->marca); ?></td>
                                <td><?php echo e($device->numtelchip); ?></td>
                                <td><?php echo e($device->compania); ?></td>
                                <td><?php echo e($device->observaciones); ?></td>
                                <td><?php echo e($device->status); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('dispositivos.show', $device->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('dispositivos.edit', $device->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['dispositivos.destroy', $device->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($devices->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
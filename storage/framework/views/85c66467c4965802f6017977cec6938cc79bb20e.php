<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    <a href="<?php echo e(url('cuentaspdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        <?php echo e(Form::open(['route' => 'cuentas.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('nameuser', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre de usuario'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por correo'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('nummoviline', null, ['class' => 'form-control', 'placeholder' => 'Buscar por telefono'])); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>

                            </div>
                        <?php echo e(Form::close()); ?>

                </div>
                <div class="panel-heading">
                    Listado de cuentas de dispositivos moviles
                    <a href="<?php echo e(route('cuentas.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Password</th>
                                <th>Numero Movil</th>
                                <th>Observaciones</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($account->id); ?></td>
                                <td><?php echo e($account->nameuser); ?></td>
                                <td><?php echo e($account->nombre); ?> <?php echo e($account->apellidop); ?> <?php echo e($account->apellidom); ?></td>
                                <td><?php echo e($account->correo); ?></td>
                                <td><?php echo e($account->password); ?></td>
                                <td><?php echo e($account->nummoviline); ?></td>
                                <td><?php echo e($account->observaciones); ?></td>
                                <td><?php echo e($account->status); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('cuentas.show', $account->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('cuentas.edit', $account->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['cuentas.destroy', $account->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($accounts->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
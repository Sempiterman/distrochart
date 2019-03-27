<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="<?php echo e(url('equipospdf')); ?>"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        <?php echo e(Form::open(['route' => 'equipos.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

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
                    Listado de equipos
                    <a href="<?php echo e(route('equipos.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">FOLIO</th>
                                <th>NoEmpleado</th>
                                
                                <th>Chaleco</th>
                                <th>Mochila</th>
                                <th>Gafete</th>
                                <th>Rotafolio</th>
                                <th>Manuales</th>
                                <th>Sombrero</th>
                                <th>Portahojas</th>
                                <th>Utileria</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($kit->folio); ?></td>
                                <td><?php echo e($kit->employ->numempleado); ?></td>
                                
                                <td><?php echo e($kit->chaleco); ?></td>
                                <td><?php echo e($kit->mochila); ?></td>
                                <td><?php echo e($kit->gafete); ?></td>
                                <td><?php echo e($kit->rotafolio); ?></td>
                                <td><?php echo e($kit->manuales); ?></td>
                                <td><?php echo e($kit->sombrero); ?></td>
                                <td><?php echo e($kit->portahojas); ?></td>
                                <td><?php echo e($kit->utileria); ?></td>
                                <td><?php echo e($kit->status); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('equipos.show', $kit->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('equipos.edit', $kit->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['equipos.destroy', $kit->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>
                    <?php echo e($kits->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cuentas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
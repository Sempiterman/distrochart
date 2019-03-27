<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(route('home')); ?>"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            
                        <?php echo e(Form::open(['route' => 'posts.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Buscar por extracto'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'Buscar por cuerpo'])); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                            </div>
                        <?php echo e(Form::close()); ?>

                </div>
                <div class="panel-heading">
                    Lista de avisos para SE, CAE de la 06 junta Distrital de Tlaxiaco
                    <a href="<?php echo e(route('posts.create')); ?>" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Status</th>
                                <th>Cuerpo</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->id); ?></td>
                                <td><?php echo e($post->name); ?></td>
                                <td><?php echo e($post->status); ?></td>
                                <td><?php echo e($post->excerpt); ?></td>
                                <td><?php echo e($post->body); ?></td>
                                <td width="10px">
                                    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']); ?>

                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>   
                    </table>     	

                    <?php echo e($posts->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
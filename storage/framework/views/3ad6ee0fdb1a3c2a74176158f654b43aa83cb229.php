<div class="form-group form-inline">
    <?php echo e(Form::label('nameuser', 'Nombre de usuario')); ?>

    <?php echo e(Form::text('nameuser', null, ['class' => 'form-control', 'id' => 'nameuser'])); ?>


    <?php echo e(Form::label('nombre', 'Nombre')); ?>

    <?php echo e(Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre'])); ?>


    <?php echo e(Form::label('apellidop', 'Apellidos')); ?>

    <?php echo e(Form::text('apellidop', null, ['class' => 'form-control', 'id' => 'apellidop','placeholder'=>'Apellido Paterno'])); ?>

    
    <?php echo e(Form::text('apellidom', null, ['class' => 'form-control', 'id' => 'apellidom','placeholder'=>'Apellido Materno'])); ?>

</div>
<div class="form-group form-inline">
    <?php echo e(Form::label('correo', 'Correo')); ?>

    <?php echo e(Form::text('correo', null, ['class' => 'form-control', 'id' => 'correo'])); ?>


    <?php echo e(Form::label('password', 'Password')); ?>

    <?php echo e(Form::text('password', null, ['class' => 'form-control', 'id' => 'password'])); ?>


    <?php echo e(Form::label('nummoviline', 'Numero de telefono')); ?>

    <?php echo e(Form::text('nummoviline', null, ['class' => 'form-control', 'id' => 'nummoviline'])); ?>

    <hr>
    <?php echo e(Form::label('observaciones', 'Detalles')); ?>

    <?php echo e(Form::textarea('observaciones', null, ['class' => 'form-control','rows' => '2'])); ?>

</div>
<hr>
    <?php echo e(Form::label('slug', 'Estado')); ?>

    <label>
        <?php echo e(Form::radio('status', 'ACTIVA')); ?> ACTIVA
    </label>
    <label>
        <?php echo e(Form::radio('status', 'INACTIVA')); ?> INACTIVA
    </label>
    <label>
        <?php echo e(Form::radio('status', 'INHABILITADA')); ?> INHABILITADA
    </label>
    <label>
        <?php echo e(Form::radio('status', 'SUSPENDIDA')); ?> SUSPENDIDA
    </label>
    <hr>
<div align="center" class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>


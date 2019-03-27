<div class="form-group form-inline">
    <?php echo e(Form::label('name', 'Nombre')); ?>

    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])); ?>


    <?php echo e(Form::label('email', 'Correo')); ?>

    <?php echo e(Form::text('email', null, ['class' => 'form-control', 'id' => 'email'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('password', 'Password')); ?>

    <?php echo e(Form::text('password', null, ['class' => 'form-control', 'id' => 'password'])); ?>

</div>
<div class="form-group" align="center">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>

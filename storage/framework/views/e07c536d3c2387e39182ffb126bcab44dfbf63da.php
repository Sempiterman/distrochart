<div class="form-group form-inline">
    <?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>

    <?php echo e(Form::label('numempleado', 'No. de empleado')); ?>

    <?php echo e(Form::text('numempleado', null, ['class' => 'form-control', 'id' => 'numempleado'])); ?>


    <?php echo e(Form::label('name', 'Nombre')); ?>

    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])); ?>


    <?php echo e(Form::label('apellidop', 'Apellidos')); ?>

    <?php echo e(Form::text('apellidop', null, ['class' => 'form-control', 'id' => 'apellidop','placeholder' =>'Apellido Paterno'])); ?>


    
    <?php echo e(Form::text('apellidom', null, ['class' => 'form-control', 'id' => 'apellidom','placeholder' =>'Apellido Materno'])); ?>

    <br><br>
    <?php echo e(Form::label('telefono', 'Telefono')); ?>

    <?php echo e(Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono'])); ?>


    <?php echo e(Form::label('correo', 'Correo')); ?>

    <?php echo e(Form::text('correo', null, ['class' => 'form-control', 'id' => 'correo'])); ?>

    
    
    <?php echo e(Form::label('direccion', 'Direccion')); ?>

    <?php echo e(Form::textarea('direccion', null, ['class' => 'form-control','rows' => '2'])); ?>

</div>
<hr>
<div class="form-group form-inline">
    <?php echo e(Form::label('position_id', 'Cargo')); ?>

    <?php echo e(Form::select('position_id', $positions, null, ['class' => 'form-control'])); ?>


    <?php echo e(Form::label('zore_id', 'ZORES')); ?>

    <?php echo e(Form::select('zore_id', $zores, null, ['class' => 'form-control'])); ?>


    <?php echo e(Form::label('are_id', 'ARES')); ?>

    <?php echo e(Form::select('are_id', $ares, null, ['class' => 'form-control'])); ?>


    <?php echo e(Form::label('municipality_id', 'Municipio')); ?>

    <?php echo e(Form::select('municipality_id', $municipalities, null, ['class' => 'form-control'])); ?>

</div> 
<hr>
<div class="form-group">
    <?php echo e(Form::label('slug', 'Estado')); ?>

    <label>
        <?php echo e(Form::radio('status', 'ACTIVO')); ?> ACTIVO
    </label>
    <label>
        <?php echo e(Form::radio('status', 'INACTIVO')); ?> INACTIVO
    </label>
    <label>
        <?php echo e(Form::radio('status', 'SUSPENDIDO')); ?> SUSPENDIDO
    </label>
    <label>
        <?php echo e(Form::radio('status', 'BAJA')); ?> BAJA
    </label>
</div>
<div align="center" class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>
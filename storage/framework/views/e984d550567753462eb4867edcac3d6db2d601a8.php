<div class="form-group form-inline">
    <?php echo e(Form::label('imei', 'IMEI')); ?>

    <?php echo e(Form::text('imei', null, ['class' => 'form-control', 'id' => 'imei','placeholder'=>'IMEI del dispositivo'])); ?>


    <?php echo e(Form::label('marca', 'Marca')); ?>

    <?php echo e(Form::text('marca', null, ['class' => 'form-control', 'id' => 'marca','placeholder'=>'Ej: HTC, ZTE, HUAWEI, ETC.'])); ?>


    <?php echo e(Form::label('numtelchip', 'Numero de chip')); ?>

    <?php echo e(Form::text('numtelchip', null, ['class' => 'form-control', 'id' => 'numtelchip','placeholder'=>'Numero telefonico del chip'])); ?>

    <br><br>
    <?php echo e(Form::label('compania', 'Compania')); ?>

    <?php echo e(Form::text('compania', null, ['class' => 'form-control', 'id' => 'compania','placeholder'=>'Ej: Telcel, Movistar, Unefon, etc.'])); ?>


    <?php echo e(Form::label('observaciones', 'Observaciones')); ?>

    <?php echo e(Form::text('observaciones', null, ['class' => 'form-control', 'id' => 'observaciones','placeholder'=>'Ej:desperfectos, complicaciones, danos, etc.'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('slug', 'Estado')); ?>

    <label>
        <?php echo e(Form::radio('status', 'FUNCIONAL')); ?> FUNCIONAL
    </label>
    <label>
        <?php echo e(Form::radio('status', 'NO FUNCIONAL')); ?> NO FUNCIONAL
    </label>
</div>
<hr>
<div class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>

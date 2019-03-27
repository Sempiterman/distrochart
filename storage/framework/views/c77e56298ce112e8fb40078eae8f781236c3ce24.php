<?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>


<div class="form-group form-inline">
    <?php echo e(Form::label('folio', 'FOLIO')); ?>

    <?php echo e(Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio'])); ?>


	<?php echo e(Form::label('are_id', 'ARES')); ?>

	<?php echo e(Form::select('are_id', $ares, null, ['class' => 'form-control'])); ?>


	<?php echo e(Form::label('zore_id', 'ZORES')); ?>

	<?php echo e(Form::select('zore_id', $zores, null, ['class' => 'form-control'])); ?>


</div>

<div class="form-group">
    <?php echo e(Form::label('detalles', 'Detalles')); ?>

    <?php echo e(Form::textarea('detalles', null, ['class' => 'form-control','rows' => '2'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('img', 'Imagen')); ?>

    <?php echo e(Form::file('img')); ?>

</div>
<div class="form-group form-inline">
    <?php echo e(Form::label('slug', 'Estado')); ?>

    <label>
        <?php echo e(Form::radio('status', 'DISPONIBLE')); ?> DISPONIBLE
    </label>
    <label>
        <?php echo e(Form::radio('status', 'EXPEDIENTE PRESTADO')); ?> EXPEDIENTE PRESTADO
    </label>
    <label>
        <?php echo e(Form::radio('status', 'EXPEDIENTE DESTRUIDO')); ?> EXPEDIENTE DESTRUIDO
    </label>
</div>
<hr>
<div class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>


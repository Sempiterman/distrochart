
<div class="form-group form-inline">
    <?php echo e(Form::label('folio', 'Folio:')); ?>

    <?php echo e(Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio'])); ?>

</div>

<div class="form-group">
	<?php echo e(Form::label('Audifonos')); ?>

	<label>
		<?php echo e(Form::radio('audifonos', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('audifonos', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Cargador')); ?>

	<label>
		<?php echo e(Form::radio('cargador', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('cargador', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Cable')); ?>

	<label>
		<?php echo e(Form::radio('cable', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('cable', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Estado')); ?>

	<label>
		<?php echo e(Form::radio('estado', 'BUENO')); ?> BUENO
	</label>
	<label>
		<?php echo e(Form::radio('estado', 'REGULAR')); ?> REGULAR
	</label>
	<label>
		<?php echo e(Form::radio('estado', 'MALO')); ?> MALO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Bateria')); ?>

	<label>
		<?php echo e(Form::radio('bateria', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('bateria', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Chip')); ?>

	<label>
		<?php echo e(Form::radio('chip', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('chip', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Display')); ?>

	<label>
		<?php echo e(Form::radio('dysplay', 'BUENO')); ?> BUENO
	</label>
	<label>
		<?php echo e(Form::radio('dysplay', 'NO FUNCIONAL')); ?> NO FUNCIONAL
	</label>
	<label>
		<?php echo e(Form::radio('dysplay', 'ESTRELLADO')); ?> ESTRELLADO
	</label>
</div>

<div class="form-group">
    <?php echo e(Form::label('detalles', 'Detalles')); ?>

    <?php echo e(Form::textarea('detalles', null, ['class' => 'form-control', 'rows' => '2'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('slug', 'Estado')); ?>

    <label>
        <?php echo e(Form::radio('status', 'ENTREGADO')); ?> ENTREGADO
    </label>
    <label>
        <?php echo e(Form::radio('status', 'PENDIENTE')); ?> PENDIENTE
    </label>
</div>
<hr>
<div class="form-group" align="center">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('vendor/stringToSlug/jquery.stringToSlug.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>


<div class="form-group">
    <?php echo e(Form::label('folio', 'Folio:')); ?>

    <?php echo e(Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio'])); ?>

</div>

<div class="form-group">
	<?php echo e(Form::label('Chaleco')); ?>

	<label>
		<?php echo e(Form::radio('chaleco', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('chaleco', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Mochila')); ?>

	<label>
		<?php echo e(Form::radio('mochila', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('mochila', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Gafete')); ?>

	<label>
		<?php echo e(Form::radio('gafete', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('gafete', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Rotafolio')); ?>

	<label>
		<?php echo e(Form::radio('rotafolio', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('rotafolio', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Manuales')); ?>

	<label>
		<?php echo e(Form::radio('manuales', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('manuales', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Sombrero')); ?>

	<label>
		<?php echo e(Form::radio('sombrero', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('sombrero', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Portahojas')); ?>

	<label>
		<?php echo e(Form::radio('portahojas', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('portahojas', 'NO')); ?> NO
	</label>
</div>

<div class="form-group">
	<?php echo e(Form::label('Utileria')); ?>

	<label>
		<?php echo e(Form::radio('utileria', 'SI')); ?> SI
	</label>
	<label>
		<?php echo e(Form::radio('utileria', 'NO')); ?> NO
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
<div class="form-group form-inline">
    <?php echo e(Form::label('name', 'Nombre de ZORE')); ?>

    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])); ?>


    <?php echo e(Form::label('slug', 'URL amigable')); ?>

    <?php echo e(Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('descripcion', 'Detalles de la zona de responsabilidad')); ?>

    <?php echo e(Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('vendor/stringToSlug/jquery.stringToSlug.min.js')); ?>"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });
	});
</script>
<?php $__env->stopSection(); ?>
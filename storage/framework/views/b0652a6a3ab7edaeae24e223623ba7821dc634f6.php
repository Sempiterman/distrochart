<?php $__env->startSection('title', '404'); ?>

<?php $__env->startSection('message', 'No se encuentra esa URL'); ?>
<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
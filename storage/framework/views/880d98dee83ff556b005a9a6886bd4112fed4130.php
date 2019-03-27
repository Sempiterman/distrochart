<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>
	 <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
/*
th {
  background-color: black;
  color: white;
}*/
th { font-family: Arial, sans-serif;
   font-size: 15px;
   font-style: normal;
   font-variant: normal;
   font-weight: 100;
   line-height: 20px;
   background-color: black;
     color: white;
  } 
td { font-family: Arial, "Helvetica Neue", Helvetica,
   sans-serif; font-size: 10px;
   /*font-style: normal;
   font-variant: normal;*/
   /*font-weight: 700;*/
   line-height: 15px; } 
</style>
</head>
<body>
	<div class="panel-body">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th><b>No#</b></th>
                	<th><b>Usuario</b></th>
                  <th><b>Nombre</b></th>
                  <th><b>Correo</b></th>
                  <th><b>Password</b></th>
                  <th><b>Telefono</b></th>
                  <th><b>Observaciones</b></th>
                  <th><b>Status</b></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($account->id); ?></td>
                    <td><?php echo e($account->nameuser); ?></td>
                    <td><?php echo e($account->nombre); ?> <?php echo e($account->apellidop); ?> <?php echo e($account->apellidom); ?></td>
                    <td><?php echo e($account->correo); ?></td>
                    <td><?php echo e($account->password); ?>

                    <td><?php echo e($account->nummoviline); ?></td>
                    <td><?php echo e($account->observaciones); ?></td>
                    <td><?php echo e($account->status); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>   
        </table>
    </div>
</body>
</html>



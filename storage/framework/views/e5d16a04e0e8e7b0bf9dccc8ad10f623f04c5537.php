
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Salles</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES SALLES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('salle.create')); ?>">Ajouter Une Nouvelle salle</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Type Salle</th>
	                    <th>Etat</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $salles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($sl->id); ?></td>
		        		    <td><?php echo e($sl->nom); ?></td>
		        		    <td><?php echo e($sl->type->type); ?></td>
		        		    <td><?php echo e($sl->token); ?></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /salle/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('salle/' . $sl->id . '/edit')); ?>"></a>
			                <?php echo e(Form::open(array('url' => 'salle/' . $sl->id, 'class' => 'delete'))); ?>

		                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		                    <?php echo e(Form::submit('', array('class' => 'delete_btn'))); ?>

		                	<?php echo e(Form::close()); ?>

		                </td>
		        			
		        		</tr>
		        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        	</tbody>
      		</table>

      		
		</div>


</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/salle.blade.php ENDPATH**/ ?>
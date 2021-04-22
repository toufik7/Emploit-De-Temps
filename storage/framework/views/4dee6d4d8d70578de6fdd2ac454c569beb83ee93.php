
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Promotion</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES PROMOTIONS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('promotions.create')); ?>">Ajouter Une Nouvelle promotion</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre Promotion</th>
	                    <th>Nombre Etudiants</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($p->id); ?></td>
		        		    <td><?php echo e($p->promo); ?></td>
		        		    <td><?php echo e($p->nb_etudiants); ?></td>
		        		    <td class="op">
		        		    <!-- (uses the edit method found at GET /promotions/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('promotions/' . $p->id . '/edit')); ?>"></a>
			                
		        			<?php echo e(Form::open(array('url' => 'promotions/' . $p->id, 'class' => 'delete'))); ?>

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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/promotion.blade.php ENDPATH**/ ?>
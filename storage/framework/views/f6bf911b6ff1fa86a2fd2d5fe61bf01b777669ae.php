
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES MODULES</h1>
		<div style="height: 600px;">

		<a class="btn btn_conf"  href="<?php echo e(route('module.create')); ?>">Ajouter Un Nouveau module</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre</th>
	                    <th>Enseignant</th>
	                    <th>Nombre D'Heurs</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($mod->id); ?></td>
		        		    <td><?php echo e($mod->titre); ?></td>
		        		    <td><?php $__currentLoopData = $mod->enseignents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php echo e($ens->nom); ?>

						    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
		        		    
		        		    <td><?php echo e($mod->nb_heurs); ?></td>
		        		    <td class="op">
		        		    	<!-- (uses the edit method found at GET /modules/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('module/' . $mod->id . '/edit')); ?>"></a>
			                <?php echo e(Form::open(array('url' => 'module/' . $mod->id, 'class' => 'delete'))); ?>

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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/module.blade.php ENDPATH**/ ?>
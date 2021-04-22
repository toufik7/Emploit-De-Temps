
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Specialite</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES SPECIALITES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('specialites.create')); ?>">Ajouter Une Nouvelle specialite</a>
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre Specialite</th>
	                    <th>Nombre Etudiants</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $specialites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($s->id); ?></td>
		        		    <td><?php echo e($s->titre); ?></td>
		        		    <td><?php echo e($s->nb_etudiants); ?></td>
		        		    <td class="op">
		        		    	<!-- (uses the edit method found at GET /specialites/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('specialites/' . $s->id . '/edit')); ?>"></a>
			                <?php echo e(Form::open(array('url' => 'specialites/' . $s->id, 'class' => 'delete'))); ?>

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

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/specialite.blade.php ENDPATH**/ ?>
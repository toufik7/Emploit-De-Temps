
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enseignant</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES ENSEIGNANTS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('enseignent.create')); ?>">Ajouter Un(e) Nouveau(elle) enseignant(e)</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Prenom</th>
	                    <th>Emploit</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $enseignents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($ens->id); ?></td>
		        		    <td><?php echo e($ens->nom); ?></td>
		        		    <td><?php echo e($ens->prenom); ?></td>
		        		    <td><?php echo e($ens->emploit['Titre']); ?></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /enseignent/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('enseignent/' . $ens->id . '/edit')); ?>"></a>
			                <?php echo e(Form::open(array('url' => 'enseignent/' . $ens->id, 'class' => 'delete'))); ?>

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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/enseignant.blade.php ENDPATH**/ ?>
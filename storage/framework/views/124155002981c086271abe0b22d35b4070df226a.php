
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Groupes</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES GROUPES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('groupe.create')); ?>">Ajouter Un Nouveau groupe</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Specialite</th>
	                    <th>Promotion</th>
	                    <th>Nombre Etudiants</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($grp->id); ?></td>
		        		    <td><?php echo e($grp->nom); ?></td>
		        		    <td><?php echo e($grp->specialite->titre); ?></td>
		        		    <td><?php echo e($grp->promotion->promo); ?></td>
		        		    <td><?php echo e($grp->nb_etudiants); ?></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /groupe/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('groupe/' . $grp->id . '/edit')); ?>"></a>
		        			<?php echo e(Form::open(array('url' => 'groupe/' . $grp->id, 'class' => 'delete'))); ?>

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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/groupe.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Emploit de Temps</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES EMPLOITS DE TEMPS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('emploit.create')); ?>">Ajouter Un Nouveau emploit de temps</a>



			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $emploits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($emp->id); ?></td>
		        		    <td><a class="title" href="<?php echo e(URL::to('emploit/' . $emp->id)); ?>"><?php echo e($emp->Titre); ?></a></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /emploit/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('emploit/' . $emp->id . '/edit')); ?>"></a>
			                <!-- (uses the delete method found at DELETE /types/{id} -->
			                <?php echo e(Form::open(array('url' => 'emploit/' . $emp->id, 'class' => 'delete'))); ?>

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
<script type="text/javascript">
	var btn = document.getElementByClassName("delete_btn");
	btn
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/emploit.blade.php ENDPATH**/ ?>
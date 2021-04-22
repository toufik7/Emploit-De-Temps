
<?php $__env->startSection('content'); ?>



   <div class="container well">
		<h1 class="text-center">LISTE DES Types DE SEANCES</h1>

		
		<a class="btn btn_conf" href="<?php echo e(route('types.create')); ?>">Ajouter Un Nouveau Type de seance</a>

		<div style="height: 600px;">
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Type</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($t->id); ?></td>
		        		    <td><?php echo e($t->type); ?></td>
		        			
 
		     
		        			<td class="op">
			                <!-- (uses the edit method found at GET /types/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('types/' . $t->id . '/edit')); ?>"></a>
			                <!-- (uses the delete method found at DELETE /types/{id} -->
			                <?php echo e(Form::open(array('url' => 'types/' . $t->id, 'class' => 'delete'))); ?>

		                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		                    <?php echo e(Form::button('', ['type' => 'submit','class' => 'delete_btn','id' => 'dbtn'])); ?>

		                	<?php echo e(Form::close()); ?>


						    
						    
						   </td>
		        		</tr>
		        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        	</tbody>
      		</table>

      		
		</div>
		


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/type_seance.blade.php ENDPATH**/ ?>
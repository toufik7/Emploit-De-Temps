
<?php $__env->startSection('content'); ?>

   <div class="container well">
		<h1 class="text-center">LISTE DES SEANCES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="<?php echo e(route('seance.create')); ?>">Ajouter Une Nouvelle seance</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Emploit</th>
	                    
	                    <th>Type Seance</th>
	                    <th>Module</th>
	                    <th>Enseignant</th>
	                    <th>Salle</th>
	                    <th>groupes</th>
	                    <th>jour</th>
	                    <th>Heure Debut</th>
	                    <th>Heure Fin</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php $__currentLoopData = $seances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		        		<tr>
		        			
		        		    <td><?php echo e($sc->id); ?></td>
		        		   <td> <?php echo e($sc->emploit->Titre); ?></td>
		        		    <td><?php echo e($sc->type->type); ?></td>
		        		    <td><?php echo e($sc->module->titre); ?></td>
		        		    <td><?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?></td>
		        		    <td><?php echo e($sc->salle->nom); ?></td>
		        		    <td><?php $__currentLoopData = $sc->groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php echo e($grp->nom); ?>

						    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>

		        		    <td><?php echo e($sc->jour); ?></td>
		        		    <td><?php echo e($sc->debut); ?></td>
		        		    <td><?php echo e($sc->fin); ?></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /seance/{id}/edit -->
			                <a class="edit" href="<?php echo e(URL::to('seance/' . $sc->id . '/edit')); ?>"></a>
		        			<!-- (uses the delete method found at DELETE /types/{id} -->
			                <?php echo e(Form::open(array('url' => 'seance/' . $sc->id, 'class' => 'delete'))); ?>

		                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		                    <?php echo e(Form::submit('', array('class' => 'delete_btn'))); ?>

		                	<?php echo e(Form::close()); ?>

		                </td>
		        		</tr>
		        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        	</tbody>
      		</table>

      		
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/seance.blade.php ENDPATH**/ ?>
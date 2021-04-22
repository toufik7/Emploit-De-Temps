
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter Un Type De Seance<strong></strong></h1>

        <div>
       
             
            <?php echo Form::open(array('route'=>'types.store')); ?>

               <div class="form-group">
                <div class="org">
               	<?php echo Form::label('type','Entrer le Type de Seance'); ?>

               	<?php echo Form::text('type',null,['class'=>'form-control']); ?>

               </div>
               </div>

               <div class="form-group">
               	
               	<?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('types.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/type_seance.blade.php ENDPATH**/ ?>
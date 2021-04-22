
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter Une Nouveau Module<strong></strong></h1>

        <div>
       
             
            <?php echo Form::open(array('route'=>'module.store')); ?>

               <div class="form-group">
               	<?php echo Form::label('titre','Entrer le titre'); ?>

               	<?php echo Form::text('titre',null,['class'=>'form-control']); ?>

               </div>
               <div class="form-group">
                <?php echo Form::label('nb_heurs','Entrer le nombre des heurs'); ?>

                <?php echo Form::text('nb_heurs',null,['class'=>'form-control']); ?>

               </div>
               <div class="form-group">
                <?php echo Form::label('enseignant','choisit un enseignant'); ?>

                <?php echo Form::select('id_enseignent', $data['ens'],null, ['class'=>'slc','placeholder' => 'choisit un enseignant...']); ?>

               </div>
             
               <div class="form-group">
               	
               	<?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('module.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/module.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter Specialite<strong></strong></h1>

        <div>
       
             
            <?php echo Form::open(array('route'=>'specialites.store')); ?>

               <p>
               	<?php echo Form::label('titre','Entrer le Titre de la Specialite'); ?>

               	<?php echo Form::text('titre',null,['class'=>'form-control']); ?>

               </p>

               <p>
                <?php echo Form::label('nb_etudiants','Entrer le nombre des etudiants'); ?>

                <?php echo Form::text('nb_etudiants',null,['class'=>'form-control']); ?>

              </p>
              

              <p>
               	<?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('specialites.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </p>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/specialite.blade.php ENDPATH**/ ?>
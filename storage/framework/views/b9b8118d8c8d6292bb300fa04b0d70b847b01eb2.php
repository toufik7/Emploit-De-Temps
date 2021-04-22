
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier Specialite <?php echo e($spec->titre); ?><strong></strong></h1>

        <div>
          <?php echo e(Form::model($spec,array('route'=>array('specialites.update',$spec->id),'method'=>'PUT'))); ?>

       
             
            
              <p>
               <div class="form-group">
                <?php echo Form::label('titre','Entrer le titre'); ?>

                <?php echo Form::text('titre',null,['class'=>'form-control']); ?>

               </div>
             </p>

               <P>
               <div class="form-group">
                <?php echo Form::label('nb_etudiants','Entrer nb_etudiants'); ?>

                <?php echo Form::text('nb_etudiants',null,['class'=>'form-control']); ?>

               </div>
             </P>

               <P>
               <div class="form-group">
                
                <?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('specialites.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
             </P>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/specialite.blade.php ENDPATH**/ ?>
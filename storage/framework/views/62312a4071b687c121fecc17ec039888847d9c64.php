
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter la Promotion<strong></strong></h1>

        <div>
       
             
            
            <?php echo Form::open(array('route'=>'promotions.store')); ?>

            <p>
               <div class="form-group">
                <?php echo Form::label('promo','Entrer la promo'); ?>

                <?php echo Form::text('promo',null,['class'=>'form-control']); ?>

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
                
                <?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('promotions.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
             </P>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/promotion.blade.php ENDPATH**/ ?>
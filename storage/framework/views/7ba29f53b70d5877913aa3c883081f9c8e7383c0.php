
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier Promotion<strong></strong></h1>

        <div>
       
             
           <?php echo e(Form::model($promo,array('route'=>array('promotions.update',$promo->id),'method'=>'PUT'))); ?>

           <p>
               <div class="form-group">
               	<?php echo Form::label('promo','Entrer la promo'); ?>

               	<?php echo Form::text('promo',null,['class'=>'form-control']); ?>

               </div>
              </p>

              <p>
               <div class="form-group">
                <?php echo Form::label('nb_etudiants','Entrer le nombre des etudiants'); ?>

                <?php echo Form::text('nb_etudiants',null,['class'=>'form-control']); ?>

               </div>
              </p>

              <p>
               <div class="form-group">
               	
               	<?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('promotions.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
              </p>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/promotion.blade.php ENDPATH**/ ?>
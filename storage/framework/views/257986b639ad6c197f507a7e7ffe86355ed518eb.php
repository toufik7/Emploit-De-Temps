
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier Enseigant<strong></strong></h1>

        <div>
       
             
              <?php echo e(Form::model($data['ens'],array('route'=>array('enseignent.update',$data['ens']->id),'method'=>'PUT'))); ?>

               <div class="form-group">
               	<?php echo Form::label('nom','Entrer le nom'); ?>

               	<?php echo Form::text('nom',null,['class'=>'form-control']); ?>

               </div>
               <div class="form-group">
                <?php echo Form::label('prenom','Entrer le prenom'); ?>

                <?php echo Form::text('prenom',null,['class'=>'form-control']); ?>

               </div>
               <div class="form-group">
                <?php echo Form::label('id_emploit','Entrer emploit associé'); ?>

                <?php echo Form::select('id_emploit', $data['emp'], $data['ens']->emploits, ['class' => 'form-control']); ?>

               </div>

               <div class="form-group">
               	
               	<?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                <?php echo e(link_to_route('enseignent.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/enseignant.blade.php ENDPATH**/ ?>
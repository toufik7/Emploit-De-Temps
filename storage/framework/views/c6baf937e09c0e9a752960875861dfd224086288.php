
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier Un Groupe<strong></strong></h1>

        <div>
       
             
             <?php echo e(Form::model($data['grp'],array('route'=>array('groupe.update',$data['grp']->id),'method'=>'PUT'))); ?>

       
               <p>
               <div class="form-group">
               	<?php echo Form::label('Nom','Entrer le nom du groupe'); ?>

               	<?php echo Form::text('nom',null,['class'=>'form-control']); ?>

               </div>
               </p>

               <p>
               <div class="form-group">
                <?php echo Form::label('id_specialite','Entrer id_specialite'); ?>

                <?php echo Form::select('id_promotion', $data['pm'], $data['grp']->promotion->id, ['class' => 'form-control']); ?>

               </div>
               </p>

               <p>
               <div class="form-group">
                <?php echo Form::label('id_promotion','Entrer id_promotion'); ?>

                <?php echo Form::select('id_specialite', $data['sp'], $data['grp']->specialite->id, ['class' => 'form-control']); ?>

               </div>
               </p>

               <p>
               <div class="form-group">
                <?php echo Form::label('nb_etudiants','Entrer nb_etudiants'); ?>

                <?php echo Form::text('nb_etudiants',null,['class'=>'form-control']); ?>

               </div>
               </p>

               <p>
               <div class="form-group">
               	<?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('groupe.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
               </p>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/groupe.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier Une Seance<strong></strong></h1>

        <div>
       
             
            <?php echo e(Form::model($data['sc'],array('route'=>array('seance.update',$data['sc']->id),'method'=>'PUT'))); ?>

            <p>
               <div class="form-group">
               	<?php echo Form::label('emploit','Entrer emploit'); ?>

               	<?php echo Form::select('id_emploit', $data['emps'], $data['sc']->emploit->id, ['class' => 'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('id_type_seance','Entrer id_type_seance'); ?>

                <?php echo Form::select('id_type_seance',$data['type'], $data['sc']->type->id,['class'=>'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('id_module','Entrer id_module'); ?>

                <?php echo Form::select('id_module', $data['mod'], $data['sc']->module->id, ['class' => 'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('id_enseignent','Entrer id_enseignent'); ?>

                <?php echo Form::select('id_enseignent', $data['ens'], $data['sc']->ens->id, ['class' => 'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('id_salle','Entrer id_salle'); ?>

                <?php echo Form::select('id_salle', $data['sl'], $data['sc']->salle->id, ['class' => 'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('groupes','choisit des groupes'); ?>

                <?php echo Form::select('id_groupe', $data['grp'],$data['sc']->groupes,['class'=>'form-control']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                 
                 <?php echo Form::label('jours','Selectionner le jour'); ?>

                 <?php echo Form::select('jour', $data['sc']->getJour()); ?>

                 
                </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('debut','Entrer heur de debut'); ?>

                <?php echo Form::time('debut',null,['class'=>'tm']); ?>

               </div>
             </p>

             

             <p>
               <div class="form-group">
                <?php echo Form::label('fin','Entrer heur de fin'); ?>

                <?php echo Form::time('fin',null,['class'=>'tm']); ?>

               </div>
             </p>

              <P>
               <div class="form-group">
               	
               	<?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('seance.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
             </P>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/seance.blade.php ENDPATH**/ ?>
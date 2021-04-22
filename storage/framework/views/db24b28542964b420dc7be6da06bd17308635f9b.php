
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter Une Seance<strong></strong></h1>

        <div>
       
             
            <?php echo Form::open(array('route'=>'seance.store')); ?>

            <p>
               <div class="form-group">
                
               	<?php echo Form::label('id_emploit',' id_emploit'); ?>

               	<?php echo Form::select('id_emploit', $data['emps'],null, ['placeholder' => 'choisit un emploit...']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                
                <?php echo Form::label('id_type_seance','id_type_seance'); ?>

                <?php echo Form::select('id_type_seance', $data['type'],null, ['placeholder' => 'choisit un type de seance...']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                
                <?php echo Form::label('id_module',' id_module'); ?>

                <?php echo Form::select('id_module', $data['mod'],null, ['placeholder' => 'choisit un module...']); ?>

               </div>
             </p>

             <P>
               <div class="form-group">
                
                <?php echo Form::label('id_enseignent',' id_enseignent'); ?>

                <?php echo Form::select('id_enseignent', $data['ens'],null, ['placeholder' => 'choisit un enseignant...']); ?>

               </div>
             </P>

             <p>
               <div class="form-group">
                
                <?php echo Form::label('id_salle',' id_salle'); ?>

                <?php echo Form::select('id_salle', $data['sl'],null, ['placeholder' => 'choisit une salle...']); ?>

               </div>
             </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('groupes','choisit des groupes'); ?>

                <?php echo Form::select('id_groupe', $data['grp'],null, ['placeholder' => 'choisit des groupes...']); ?>

               </div>
             </p>

               <p>
               <div class="form-group">
                 <?php echo Form::label('jours','Selectionner le jour'); ?>

                 <?php echo Form::select('jour', array('Dimanche' => 'Dimanche', 'Lundi' => 'Lundi','Mardi' => 'Mardi', 'Mercredi' => 'Mercredi','Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi','Samedi' => 'Samedi'), null, ['placeholder' => 'choisit un jour...']); ?>

                </div>
               </p>
               
               <p>
               <div class="form-group">
                <?php echo Form::label('debut','Entrer heur de debut'); ?>

                <?php echo Form::time('debut',null,['class'=>'tm']); ?>

               </div>
               <p>
               
               <p>
               <div class="form-group">
                <?php echo Form::label('fin','Entrer heur de fin'); ?>

                <?php echo Form::time('fin',null,['class'=>'tm']); ?>

               </div>
              </p>


              <p>
               <div class="form-group">
               	
               	<?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('seance.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
             </p>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/seance.blade.php ENDPATH**/ ?>
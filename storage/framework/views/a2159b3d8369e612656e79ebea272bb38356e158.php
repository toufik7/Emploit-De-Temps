
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Ajouter Une Salle<strong></strong></h1>

        <div>
       
             
            <?php echo Form::open(array('route'=>'salle.store')); ?>

            <p>
               <div class="form-group">
               	<?php echo Form::label('nom','Entrer nom de la salle'); ?>

               	<?php echo Form::text('nom',null,['class'=>'form-control']); ?>

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
                <?php echo Form::label('token','Entrer Etat Salle'); ?>

                <?php echo Form::select('token',array('libre' => 'libre', 'occupe' => 'occupée'),'libre',['class'=>'form-control']); ?>

               </div>
             </p>

               <div class="form-group">
               	
               	<?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('salle.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/creer/salle.blade.php ENDPATH**/ ?>
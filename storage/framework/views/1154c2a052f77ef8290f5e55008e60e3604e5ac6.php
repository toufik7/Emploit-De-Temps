
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier salle<strong></strong></h1>

        <div>
       
             
            <?php echo e(Form::model($data['sl'],array('route'=>array('salle.update',$data['sl']->id),'method'=>'PUT'))); ?>

            <p>
               <div class="form-group">
               	<?php echo Form::label('nom','Entrer le nom de la salle'); ?>

               	<?php echo Form::text('nom',null,['class'=>'form-control']); ?>

               </div>
             </p>


            <p>
             <div class="form-group">
              <?php echo Form::Label('id_type_seance', 'type:'); ?>

              <?php echo Form::select('id_type_seance', $data['types'], $data['sl']->type->id, ['class' => 'form-control']); ?>

            </div>
          </p>

             <p>
               <div class="form-group">
                <?php echo Form::label('token','Entrer Etat Salle'); ?>

                <?php echo Form::select('token',array('libre' => 'libre', 'occupe' => 'occupée'),$data['sl']->token,['class'=>'form-control']); ?>

               </div>
             </p>



              <p>
               <div class="form-group">
               	
               	<?php echo Form::button('Modifier',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('salle.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

               </div>
             </p>

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/salle.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>emploit App</title>
    
    <link rel="stylesheet" href=" <?php echo e(asset('css/table.css')); ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container">


<h1>Emploit de Temps <?php echo e($data['emp']->Titre); ?></h1>

    <div class="jumbotron text-center">
        
        <table class="emploit">
          <tr id="dim">
            <th>Dimanche</th>
            <?php $__currentLoopData = $data['scs_dim']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <p>groupe: 
                        <?php $__currentLoopData = $sc->groupes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($grp->nom); ?> <?php echo e($grp->specialite->titre); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>

          <tr id="lun">
            <th>Lundi</th> 
            <?php $__currentLoopData = $data['scs_lun']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                        
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>

          <tr id="mar">
            <th>Mardi</th>
            <?php $__currentLoopData = $data['scs_mar']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <p><!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>

          <tr id="mer">
            <th>Mercredi</th>
            <?php $__currentLoopData = $data['scs_mer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
          </tr>

          <tr id="jeu">
            <th>Jeudi</th>
            <?php $__currentLoopData = $data['scs_jeu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>

          <tr id="ven">
            <th>Vendredi</th>
            <?php $__currentLoopData = $data['scs_vend']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></p>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </tr>

          <tr id="sam">
            <th>Samedi</th>
            <?php $__currentLoopData = $data['scs_sam']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td>
                <a href="<?php echo e(URL::to('seance/' . $sc->id .'/edit')); ?>"><div class="seance" style="font-size: 12px; text-align: center">
                   <!--Id seance : <?php echo e($sc->id); ?> <br>-->
                    <p id="type"><?php echo e($sc->type->type); ?><br></p>  
                    <p id="mod"><?php echo e($sc->module->titre); ?><br></p>
                    <?php echo e($sc->ens->nom); ?>-<?php echo e($sc->ens->prenom); ?><br>
                    <p id="sl"><?php echo e($sc->salle->nom); ?><br></p>
                    <!--<?php echo e($sc->jour); ?> <br>-->
                    <p id="temps"><?php echo e($sc->debut); ?> - <?php echo e($sc->fin); ?></p>
                </div></p>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
</table>
<br>


        
       <!-- <p>
           
        </p>-->
    </div>

</div>
</body>
<script>

   
    $("#dim").find("td").on({
        mouseenter: ()=>{   $("#dim").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black )","color":"black"});  },
        mouseleave: function(){  $("#dim").find("th").css({"background":"black","color":"white"}); }

    });
    $("#lun").find("td").on({
        mouseenter: ()=>{   $("#lun").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#lun").find("th").css({"background":"black","color":"white"}); }

    });
    $("#mar").find("td").on({
        mouseenter: ()=>{   $("#mar").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#mar").find("th").css({"background":"black","color":"white"}); }

    });
    $("#mer").find("td").on({
        mouseenter: ()=>{   $("#mer").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#mer").find("th").css({"background":"black","color":"white"}); }

    });
    $("#jeu").find("td").on({
        mouseenter: ()=>{   $("#jeu").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#jeu").find("th").css({"background":"black","color":"white"}); }

    });
    $("#ven").find("td").on({
        mouseenter: ()=>{   $("#ven").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#ven").find("th").css({"background":"black","color":"white"}); }

    });
    $("#sam").find("td").on({
        mouseenter: ()=>{   $("#sam").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#sam").find("th").css({"background":"black","color":"white"}); }

    });



</script>
</html>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/showEmploit.blade.php ENDPATH**/ ?>
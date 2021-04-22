
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" <?php echo e(asset('css/style.css')); ?>">

   
</head>
<header>
<div class="nav">

  <ul>
     <li><span  class="span" onclick="openNav()">&#9776; </span></li>
    
<li>
  
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="logout" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
</li> 
<li ><a href="<?php echo e(URL::to('emploit')); ?>" class="home"></a></li>
    
   
  </ul>

</div>-
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidenav1">
     <span class="span_side">Create</span>
        <a href="<?php echo e(route('emploit.create')); ?>">Emploit</a>
        <a href="<?php echo e(route('seance.create')); ?>">seance</a>
        
  </div>
  <div class="colac1">
   <hr color="#2ECC71" width="75%" size="1">
        <a href="<?php echo e(route('specialites.create')); ?>">Specialite</a>
        <a href="<?php echo e(route('promotions.create')); ?>">Promotion</a>
        <a href="<?php echo e(route('module.create')); ?>">Module</a>
        <a href="<?php echo e(route('salle.create')); ?>">Salle</a>
        <a href="<?php echo e(route('groupe.create')); ?>">Groupe</a>
        <a href="<?php echo e(route('enseignent.create')); ?>">Enseignant</a>
        <a href="<?php echo e(route('types.create')); ?>">Types de Seances</a>
  </div>
 
  <div class="sidenav1">
     <span class="span_side">View</span>
        <a href="<?php echo e(route('emploit.index')); ?>">Emploit</a>
        <a href="<?php echo e(route('seance.index')); ?>">seance</a>
  </div>
  <div class="colac1">
   <hr color="#2ECC71" width="75%" size="1">
        <a href="<?php echo e(route('specialites.index')); ?>">Specialite</a>
        <a href="<?php echo e(route('promotions.index')); ?>">Promotion</a>
        <a href="<?php echo e(route('module.index')); ?>">Module</a>
        <a href="<?php echo e(route('salle.index')); ?>">Salle</a>
        <a href="<?php echo e(route('groupe.index')); ?>">Groupe</a>
        <a href="<?php echo e(route('enseignent.index')); ?>">Enseignet</a>
        <a href="<?php echo e(route('types.index')); ?>">Types de Seances</a>
  </div>-->

 



  </div>
</div>
</header>
<body>
<div class="cont">

  <?php if(Session::has('message')): ?>
        <div id="msg" class="success-msg"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
  <?php if(Session::has('sup_message')): ?>
        <div id="msg" class="delete-msg"><?php echo e(Session::get('sup_message')); ?></div>
        <?php endif; ?>


   <?php echo $__env->yieldContent('content'); ?>
  
</div>



<footer>
<h6>ABOUT</h6>
<p> Gestion des emplois de temps </p>            
</footer>


  <!----->

<script src="//use.typekit.net/wcp4cso.js"></script>
<script>
  try{Typekit.load();}catch(e){}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/base.blade.php ENDPATH**/ ?>
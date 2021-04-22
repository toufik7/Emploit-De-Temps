<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/stylelogin.css')); ?>">
   
</head>

<body>

<div class="form">
  <form  method="POST" action="<?php echo e(route('login')); ?>">
  <?php echo csrf_field(); ?>
  <div class="segment">
    <h1>Sign up</h1>
  </div>
  
  <label>
    <input class="input" type="text" placeholder="Email Address" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" />
   
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
     <span class="invalid-feedback" role="alert">
       <strong><?php echo e($message); ?></strong>
                  </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </label>
  <label>
    <input class="input" name="password" type="password" placeholder="Password" required autocomplete="current-password"/>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </label>
  

  <button class="red" type="submit">   <?php echo e(__('Login')); ?></button>
  
  <div class="rememberme">
                                <div>
                                    <input class="checkinput" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="forget" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
 
</form>

  
</div>

<footer class="footer">
<h6>ABOUT</h6>
<p>  Gestion des emplois de temps </p>


              
</footer>

  <!----->

</body>
</html><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/auth/login.blade.php ENDPATH**/ ?>
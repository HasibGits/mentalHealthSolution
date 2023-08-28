<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Login</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
           <div class="col-md-4">
               <div class="card shadow">
                   <div class="card-header py-2">
                       <h4 class="fw-bold text-secondary text-center">Doctor Login</h4>
                   </div>
                   <div class="card-body p-5">

                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> <?php echo e(Session::get('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                       <div id="login_alert"></div>
                       <form action="<?php echo e(route('doctor.login')); ?>" method="post">
                           <?php echo csrf_field(); ?>
                           <div class="mb-3">
                               <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-Mail">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                           <div class="mb-3">
                               <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password">
                               <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>
                           <div class="mb-3">
                               <a href="" class="text-decoration-none">Forgot Password ?</a>
                               <div class="invalid-feedback"></div>
                           </div>
                           <div class="mb-3 d-grid">
                               <input type="submit" value="Login" id="login_btn" class="btn btn-dark rounded-0 grid" placeholder="Password">
                               <div class="invalid-feedback"></div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
    
    <script src="<?php echo e(asset('admin/js/bootstrap.bundle.js')); ?>"></script>
</body>
</html>
<?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/auth/doctor-login.blade.php ENDPATH**/ ?>
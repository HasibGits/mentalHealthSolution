<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand bg-light navbar-light">
        <div class="container">
            <a href="<?php echo e(route('admin.dashboard')); ?>"class="navbar-brand text-uppercase">Mental Support</a>
            <ul class="navbar-nav">
                <li><a href="<?php echo e(route('doctor.dashboard')); ?>" class="fw-bold nav-link">Dashboard</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="<?php echo e(asset('admin/img/default.jpg')); ?>" class="rounded-circle" alt="User" width="30" height="30">
                        <?php echo e(Auth::guard('doctor')->user()->name); ?>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Profile</a></li>
                        <li><a href="<?php echo e(route('doctor.change-password')); ?>" class="dropdown-item">Change Password</a></li>
                        <li>
                            <form action="<?php echo e(route('doctor.logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="text-danger dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('admin/js/bootstrap.bundle.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/d365ede256.js" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/doctor/master.blade.php ENDPATH**/ ?>
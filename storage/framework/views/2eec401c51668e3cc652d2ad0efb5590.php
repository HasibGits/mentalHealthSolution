<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctor Change Password</h4>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo e(route('doctor.change-password')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="current_password">Current Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="current_password" id="current_password" class="form-control">
                                        <?php $__errorArgs = ['current_password'];
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

                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="new_password">New Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="new_password" id="new_password" class="form-control">
                                        <?php $__errorArgs = ['new_password'];
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
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label for="confirm_password">Confirm Password <span class="text-danger"> *</span></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                                        <?php $__errorArgs = ['confirm_password'];
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
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Update" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/doctor/auth/change-password.blade.php ENDPATH**/ ?>
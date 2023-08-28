<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3 class="text-center">Doctor List</h3>
        <div class="row mt-5">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo e(asset($doctor->image)); ?>" class="image-fluid" alt="">
                        <h4 class="card-title"><?php echo e($doctor->name); ?></h4>
                        <p><span class="fw-bold">Degree:</span> <?php echo e($doctor->degree); ?></p>
                        <p><span class="fw-bold">Hospital Name:</span> <?php echo e($doctor->hospital_name); ?></p>
                        <p><span class="fw-bold">Time: </span><?php echo e($doctor->time); ?></p>
                        <p>Weekly Availability:</p>
                        <p>
                            <ul>
                                <?php $__currentLoopData = json_decode($doctor->weekly_availability); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="ms-3"><?php echo e($day); ?>,</span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </p>
                        <form action="<?php echo e(route('make.appointment')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="doctor_id" value="<?php echo e($doctor->id); ?>">
                            <button type="submit" class="btn btn-success">Make Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/frontend/doctor-list.blade.php ENDPATH**/ ?>
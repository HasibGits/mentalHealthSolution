<?php $__env->startSection('title', 'Doctor Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MY Patient Pending List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointmentsPending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($appointment->user->name); ?></td>
                                    <td><?php echo e($appointment->user->email); ?></td>
                                    <td><?php echo e($appointment->user->phone); ?></td>
                                    <td><?php echo e($appointment->user->address); ?></td>
                                    <td>
                                        <?php if($appointment->status == 0): ?>
                                        <span class="badge text-bg-warning">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('appointment.status', $appointment->id)); ?>" class="btn btn-primary">Approved</a>
                                        <a href="<?php echo e(route('appointment.delete', $appointment->id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Approved Patient List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointmentsApproved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($appointment->user->name); ?></td>
                                    <td><?php echo e($appointment->user->email); ?></td>
                                    <td><?php echo e($appointment->user->phone); ?></td>
                                    <td><?php echo e($appointment->user->address); ?></td>
                                    <td>
                                        <?php if($appointment->status == 1): ?>
                                        <span class="badge text-bg-success">Approved</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/doctor/dashboard.blade.php ENDPATH**/ ?>
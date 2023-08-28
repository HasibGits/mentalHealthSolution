<?php $__env->startSection('title', 'Appointment Details'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Patient Appointment List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Patient Name</th>
                                    <th>Patient Phone</th>
                                    <th>Doctor Name</th>
                                    <th>Doctor Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($appointment->user->name); ?></td>
                                    <td><?php echo e($appointment->user->phone); ?></td>
                                    <td><?php echo e($appointment->doctor->name); ?></td>
                                    <td><?php echo e($appointment->doctor->phone); ?></td>
                                    <td>
                                        <?php if($appointment->status == 0): ?>
                                        <span class="badge text-bg-warning">Pending</span>
                                        <?php else: ?>
                                        <span class="badge text-bg-success">Success</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($appointment->status == 0): ?>
                                        <a href="<?php echo e(route('appointment.delete', $appointment->id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/admin/appointment/index.blade.php ENDPATH**/ ?>
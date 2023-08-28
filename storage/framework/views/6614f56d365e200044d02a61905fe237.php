<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card p-3 bg-info">
                    <h4 class="card-title">Total Patient</h4>
                    <h2 class="text-center"><?php echo e($patientCount); ?></h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-3 bg-success text-white">
                    <h4 class="card-title">Total Doctor</h4>
                    <h2 class="text-center"><?php echo e($doctorCount); ?></h2>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-3 bg-primary text-white">
                    <h4 class="card-title">Successful Patient</h4>
                    <h2 class="text-center"><?php echo e($doctorCount); ?></h2>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Current Patient Appointment List</h4>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $currentPatientAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
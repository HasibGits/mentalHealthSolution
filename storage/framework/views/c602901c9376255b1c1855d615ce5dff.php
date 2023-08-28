<?php $__env->startSection('title', 'Add New Doctor'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Doctor List</h3>
                    </div>
                    <div class="card-body text-justify" >
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Availability </th>
                                    <th>Time </th>
                                    <th>Degree</th>
                                    <th>Hospital Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th style="width: 13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($doctor->name); ?></td>
                                        <td><?php echo e($doctor->email); ?></td>
                                        <td><?php echo e($doctor->phone); ?></td>
                                        <td>
                                            <ul>
                                                <?php $__currentLoopData = json_decode($doctor->weekly_availability); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $days): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($days); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </td>
                                        <td><?php echo e($doctor->time); ?></td>
                                        <td><?php echo e($doctor->degree); ?></td>
                                        <td><?php echo e($doctor->hospital_name); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset($doctor->image)); ?>" height="60" width="80" alt="">
                                        </td>
                                        <td>
                                            <span class="badge text-bg-<?php echo e($doctor->status == 1 ? 'primary' : 'secondary'); ?>"><?php echo e($doctor->status == 1 ? 'Active' : 'Deactivated'); ?></span>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('doctors.status', $doctor->id)); ?>" class="btn btn-<?php echo e($doctor->status == 1 ? 'warning' : 'success'); ?>" title="<?php echo e($doctor->status == 1 ? 'Deactive' : 'Active'); ?>" ><i class="fa-solid fa-thumbs-<?php echo e($doctor->status == 1 ? 'down' : 'up'); ?>"></i></i></a>
                                            <a class="btn btn-primary" title="Edit" href="<?php echo e(route('doctors.edit', $doctor->id)); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form onsubmit="return confirm('Are you sure want to delete?')" action="<?php echo e(route('doctors.destroy', $doctor->id)); ?>"  style="display: inline-block" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP Development\Laravel\mY-project\mentalHealthSolution\resources\views/admin/doctor/index.blade.php ENDPATH**/ ?>
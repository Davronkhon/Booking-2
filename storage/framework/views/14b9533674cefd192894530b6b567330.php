<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('user.update', $user->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label for="">UserName</label>
            <input type="text" class="form-control" id="" name="username" value="<?php echo e($user->username); ?>">
            <label for="">Password</label>
            <input type="password" class="form-control" id="" name="password" value="<?php echo e($user->password); ?>">
            <label for="">Role</label>
            <input type="password" class="form-control" id="" name="role" value="<?php echo e($user->role); ?>">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email" value="<?php echo e($user->email); ?>">
            <input type="submit" value="Изменить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/user/edit.blade.php ENDPATH**/ ?>
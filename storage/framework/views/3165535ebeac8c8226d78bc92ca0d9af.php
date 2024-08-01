<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<!-- create -->
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('user.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="">UserName : </label>
            <input type="text" name="username" class="form-control">
            <label for="">Password : </label>
            <input type="password" name="password" class="form-control">
            <label for="">Role : </label>
            <input type="text" name="role" class="form-control">
            <label for="">Email : </label>
            <input type="email" name="email" class="form-control"><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/user/create.blade.php ENDPATH**/ ?>
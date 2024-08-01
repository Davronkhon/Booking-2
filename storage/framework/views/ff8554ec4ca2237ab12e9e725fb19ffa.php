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
        <form action="<?php echo e(route('foodcat.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="">Name : </label>
            <input type="text" name="name" class="form-control">
            <label for="">Description : </label>
            <input type="text" name="description" class="form-control"><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/foodcat/create.blade.php ENDPATH**/ ?>
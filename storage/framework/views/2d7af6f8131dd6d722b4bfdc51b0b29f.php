<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('rest.update', $rest->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label for="">Name</label>
            <input type="text" class="form-control" id="" name="name" value="<?php echo e($rest->name); ?>">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" name="description" value="<?php echo e($rest->description); ?>">
            <input type="submit" value="Изменить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/rest/edit.blade.php ENDPATH**/ ?>
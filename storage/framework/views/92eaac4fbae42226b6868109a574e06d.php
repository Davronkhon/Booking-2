<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('message')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('message')); ?>

        </div>
    <?php elseif(session('message2')): ?>
        <div class="alert alert-info">
            <?php echo e(session('message2')); ?>

        </div>
    <?php endif; ?>
    <a href="<?php echo e(route('restaurant.create')); ?>" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Rest_id</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($restaurant->name); ?></td>
                <td><?php echo e($restaurant->address); ?></td>
                <td><?php echo e($restaurant->phone); ?></td>
                <td><?php echo e($restaurant->email); ?></td>
                <td><?php echo e($restaurant->categories->name); ?></td>
                <td>
                    <form action="<?php echo e(route('restaurant.destroy', $restaurant->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('restaurant.edit', $restaurant->id)); ?>" method="get">
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/restaurant/store.blade.php ENDPATH**/ ?>
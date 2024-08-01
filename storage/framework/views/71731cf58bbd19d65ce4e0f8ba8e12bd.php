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
    <a href="<?php echo e(route('rest.create')); ?>" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        <?php $__currentLoopData = $rests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($rest->name); ?></td>
                <td><?php echo e($rest->description); ?></td>
                <td>
                    <form action="<?php echo e(route('rest.destroy', $rest->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('rest.edit', $rest->id)); ?>" method="get">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/rest/index.blade.php ENDPATH**/ ?>
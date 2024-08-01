<?php $__env->startSection('title'); ?>
    <h3>Таблица clients</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('client.create')); ?>" class="btn btn-info">Добавить</a>
    <br><br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>surname</th>
            <th>phone</th>
            <th>restaurant_id</th>
            <th>user_id</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($client->name); ?></td>
                <td><?php echo e($client->surname); ?></td>
                <td><?php echo e($client->phone); ?></td>
                <td><?php echo e($client->restaurants->name); ?></td>
                <td><?php echo e($client->user->username); ?></td>
                <td>
                    <form action="<?php echo e(route('client.destroy', $client->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('client.edit', $client->id)); ?>" method="get">
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="update" class="btn btn-info">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/client/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    Список Бронирований
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
    <a href="<?php echo e(route('booking.create')); ?>" class="btn btn-primary mb-3">Добавить</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Начало</th>
            <th>Конец</th>
            <th>Гости</th>
            <th>Статус</th>
            <th>Место</th>
            <th>Клиент</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($booking->start_time); ?></td>
                <td><?php echo e($booking->end_time); ?></td>
                <td><?php echo e($booking->guests); ?></td>
                <td><?php echo e($booking->status); ?></td>
                <td><?php echo e($booking->place->name); ?></td>
                <td><?php echo e($booking->client->name); ?></td>
                <td>
                    <form action="<?php echo e(route('booking.destroy', $booking->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <a href="<?php echo e(route('booking.edit', $booking->id)); ?>" class="btn btn-info">Изменить</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking-1\resources\views/booking/index.blade.php ENDPATH**/ ?>
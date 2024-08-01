<?php $__env->startSection('title'); ?>
    Добавление
<?php $__env->stopSection(); ?>
<!-- create -->
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('order.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="">Quantity : </label>
            <input type="number" name="quantity" class="form-control">
            <label for="">DateTime : </label>
            <input type="datetime-local" name="date" class="form-control">
            <label for="">Status : </label>
            <input type="text" name="status" class="form-control">
            <label for="">Booking_id : </label>
            <select name="booking_id" id="" class="form-control">
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($booking->id); ?>"><?php echo e($booking->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label for="">Food_id : </label>
            <select name="food_id" id="" class="form-control">
                <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($food->id); ?>"><?php echo e($food->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label for="">Client_id : </label>
            <select name="client_id" id="" class="form-control">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/order/create.blade.php ENDPATH**/ ?>
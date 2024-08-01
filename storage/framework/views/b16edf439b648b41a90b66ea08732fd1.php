<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('client.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Surname:</label>
        <input type="text" name="surname" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Phone:</label>
        <input class="form-control" type="text" name="phone">
        <label for="">User:</label>
        <select name="user_id" class="form-control">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label for="">Restaurant:</label>
        <select name="restaurant_id" class="form-control">
            <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($restaurant->id); ?>"><?php echo e($restaurant->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <input type="submit" value="Добавить" class="btn btn-primary form-control">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/client/create.blade.php ENDPATH**/ ?>
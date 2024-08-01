<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('client.update',$clients)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" name="name" value="<?php echo e($clients->name); ?>" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Surname:</label>
                <input type="text" name="surname" value="<?php echo e($clients->surname); ?>" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Phone:</label>
            <input class="form-control" value="<?php echo e($clients->phone); ?>" type="text" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">User:</label>
            <select id="exampleInputEmail1"class="form-control" name="user_id">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Restaurant:</label>
            <select id="exampleInputEmail1"class="form-control" name="restaurant_id">
                <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($restaurant->id); ?>"><?php echo e($restaurant->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-info">Изменить</button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/client/edit.blade.php ENDPATH**/ ?>
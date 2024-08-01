<!-- resources/views/places/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Place</h1>
        <form action="<?php echo e(route('place.update', $places->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e($places->name); ?>" required>
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" class="form-control" value="<?php echo e($places->number); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required><?php echo e($places->description); ?></textarea>
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" id="capacity" name="capacity" class="form-control" value="<?php echo e($places->capacity); ?>" required>
            </div>
            <div class="form-group">
                <label for="restaurant_id">Restaurant ID:</label>
                <select class="form-control" name="restaurant_id" id="">
                    <?php $__currentLoopData = $restourants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restourant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($restourant->id); ?>"><?php echo e($restourant->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/place/edit.blade.php ENDPATH**/ ?>
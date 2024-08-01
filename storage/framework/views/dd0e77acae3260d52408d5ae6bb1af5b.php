<!-- resources/views/places/create.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create Place</h1>
        <form action="<?php echo e(route('place.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" class="form-control" required>
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
                <label for="capacity">Capacity:</label>
                <input type="number" id="capacity" name="capacity" class="form-control" required>
                <label for="restaurant_id">Restaurant ID:</label>
                <select class ="form-select" name="restaurant_id" id="">
                    <?php $__currentLoopData = $restourants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restourant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($restourant->id); ?>"><?php echo e($restourant->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <input type="submit" value="Create" class="btn btn-primary form-control">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/place/create.blade.php ENDPATH**/ ?>
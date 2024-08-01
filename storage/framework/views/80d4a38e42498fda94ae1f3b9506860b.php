<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('food.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="exampleInputEmail1" class="form-control">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1"><br>
        <label for="exampleInputEmail1" class="form-control">Price:</label>
        <input type="text" name="price" step="0.1" class="form-control" id="exampleInputEmail1"><br>
        <label for="exampleInputEmail1" class="form-control">Image:</label>
        <input class="form-control" type="file" name="image"><br>
        <label for="exampleInputEmail1" class="form-control">Description:</label>
        <input class="form-control" type="text" name="description"><br>
        <label for="exampleInputEmail1" class="form-control">Time:</label>
        <input class="form-control" type="time" name="time"><br>
        <label for="exampleInputEmail1" class="form-control">Is_active:</label>
        <input type="text" class="form-control" name="is_active"><br>
        <label for="exampleInputEmail1" class="form-control">Food_Category:</label>
        <select id="exampleInputEmail1" class="form-control" name="food_category_id">
            <?php $__currentLoopData = $foodcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($foodcategory->id); ?>" class="form-control"><?php echo e($foodcategory->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <label for="exampleInputEmail1" class="form-control">Restaurant:</label>
        <select id="exampleInputEmail1" class="form-control" name="restaurant_id">
            <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($restaurant->id); ?>" class="form-control"><?php echo e($restaurant->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>~
        </select><br>
        <input type="submit" value="Добавить" class="иет btn-primary form-control">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/food/create.blade.php ENDPATH**/ ?>
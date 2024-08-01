<?php $__env->startSection('title'); ?>
    <h3>Таблица foods</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <a href="<?php echo e(route('food.create')); ?>" class="btn btn-primary">Добавить</a>
    <br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>price</th>
            <th>image</th>
            <th>description</th>
            <th>time</th>
            <th>is_active</th>
            <th>restaurant_id</th>
            <th>food_category_id</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($food->name); ?></td>
                <td><?php echo e($food->price); ?></td>
                <td><?php echo e($food->image); ?></td>
                <td><?php echo e($food->description); ?></td>
                <td><?php echo e($food->time); ?></td>
                <td><?php echo e($food->is_active); ?></td>
                <td><?php echo e(optional($food->restaurant)->name); ?></td>
                <td><?php echo e(optional($food->foodcategory)->name); ?></td>
                <td>
                    <form action="<?php echo e(route('food.destroy', $food->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="<?php echo e(route('food.edit', $food->id)); ?>" method="get">
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="update" class="btn btn-info">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/food/index.blade.php ENDPATH**/ ?>
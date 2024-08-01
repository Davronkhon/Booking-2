<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
    <style>
        .card-body, .form-group {
            padding: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('food.update',$food)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" name="name" value="<?php echo e($food->name); ?>" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Price:</label>
                <input type="text" name="price" value="<?php echo e($food->price); ?>" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Image:</label>
            <input class="form-control" value="<?php echo e($food->image); ?>" type="file" name="image">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Description:</label>
            <input class="form-control" value="<?php echo e($food->description); ?>" type="text" name="description">
        </div>


        <div class="card-body">
            <label for="exampleInputEmail1">Time:</label>
            <input class="form-control" value="<?php echo e($food->time); ?>" type="time" name="time">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Is_active:</label>
            <input class="form-control" value="<?php echo e($food->is_active); ?>" type="text" name="is_active">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Food_category:</label>
            <select id="exampleInputEmail1"class="form-control" name="food_category_id">
                <?php $__currentLoopData = $foodcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($foodcategory->id); ?>"><?php echo e($foodcategory->name); ?></option>
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
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/food/edit.blade.php ENDPATH**/ ?>
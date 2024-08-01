 

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
         <form action="<?php echo e(route('restaurant.store')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
             <label for="">name : </label>
             <input type="text" name="name" class="form-control">
             <label for="">address : </label>
             <input type="text" name="address" class="form-control">
             <label for="">phone : </label>
             <input type="text" name="phone" class="form-control">
             <label for="">email : </label>
             <input type="email" name="email" class="form-control">
             <label for="">rest_id : </label>
             <select name="rest_category_id" id="" class="form-control">
                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select><br>
             <input type="submit" value="Добавить" class="btn btn-primary form-control">
         </form>
     </div>
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('footer'); ?>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\Booking\resources\views/restaurant/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="container">

<div class="product-list">


<form action="/category/<?php echo e($editCategory->id); ?>/update" method="POST"> 
    <?php echo e(csrf_field()); ?>


    <label for="category"> Category</label>
    <div class="row">    
    <input type="text" name="name" class="form-control" value="<?php echo e($editCategory->name); ?>" >
    </div>
    <label for="description">Description</label>
    <div class="row">
    
    <textarea name="description" id="description" cols="" rows="5" style="width: auto;"><?php echo e($editCategory->description); ?></textarea>
     </div>
    <div class="row py-2">
    <button class="btn btn-sm btn-primary" type="submit">Save</button>
    </div>
    
</form>

 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hecton\Desktop\Project\project04\resources\views/EditCategories.blade.php ENDPATH**/ ?>
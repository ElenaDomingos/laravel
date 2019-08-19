<?php $__env->startSection('content'); ?>

<div class="container">

<form action="/product/<?php echo e($product->id); ?>/update" method="POST" enctype="multipart/form-data" >
<?php echo csrf_field(); ?>
<div class="row form-group">
<label for="name">Product name</label>
<input type="text" name="name" class="form-control"  value="<?php echo e($product->name); ?>">
</div>

<div class="row  form-group">
<label for="name">Category</label>
<select name="category_id" id="category" class="form-control">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($category->category_id); ?>"><?php echo e($category->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

<label for="name">Price</label>
<input type="text" name="price" class="form-control" value="<?php echo e($product->price); ?>">
</div>

<div class="row form-group"> 
<label for="name">Description</label>
<textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo e($product->description); ?></textarea>
</div>

<div class="row form-group">
<label for="name">Photo</label>
<input type="file" name="photo" class="form-control-file">
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hecton\Desktop\Project\project04\resources\views/EditProduct.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="container">

<form action="/store/product" method="POST" enctype="multipart/form-data" >

<?php echo e(csrf_field()); ?>

<div class="row form-group">
<label for="name">Название товара</label>
<input type="text" name="name" class="form-control">
<?php if($errors->has('name')): ?>
             <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
</div>

<div class="row  form-group">
<label for="name">Категория</label>
<select name="category_id" id="category" class="form-control">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($category->category_id); ?>"><?php echo e($category->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

<label for="name">Стоимость</label>
<input type="text" name="price" class="form-control">
<?php if($errors->has('price')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('price')); ?></strong>
                                    </span>
                                <?php endif; ?>
</div>

<div class="row form-group">
<label for="name">Описание</label>
<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
<?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
</div>

<div class="row form-group">
<label for="name">Photo</label>
<input type="file" name="photo" class="form-control-file">
<?php if($errors->has('photo')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                       <?php endif; ?>
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/addProducts.blade.php ENDPATH**/ ?>
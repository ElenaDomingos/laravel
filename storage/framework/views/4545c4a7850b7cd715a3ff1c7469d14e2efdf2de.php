<?php $__env->startSection('content'); ?>

<div class="container">

<form action="/save/categories" method="POST">
    <?php echo e(csrf_field()); ?>


    <label for="category"> Категория</label>
    <div class="row">
    <input type="text" name="name" class="form-control" >
    </div>
    <label for="description">Описание</label>
    <div class="row">

    <textarea name="description" id="description" cols="" rows="5" style="width: auto;"></textarea>
     </div>
    <div class="row py-2">
    <button class="btn btn-sm btn-primary" type="submit">Сохранить</button>
    </div>

</form>

<h3>All the categories</h3>
    <div class="row">
<table style="width:100%">
  <tr>
    <th>Категория</th>
    <th>Описание</th>
    <th>Действие</th>
  </tr>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($category->name); ?></td>
    <td><?php echo e($category->description); ?></td>
    <td>
    <form action="/delete/category" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name" value="<?php echo e($category->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
    </form>
    <form action="/category/<?php echo e($category->id); ?>/edit" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name" value="<?php echo e($category->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-alert">Изменить</button>
    </form>
    </td>

  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/AddCategories.blade.php ENDPATH**/ ?>
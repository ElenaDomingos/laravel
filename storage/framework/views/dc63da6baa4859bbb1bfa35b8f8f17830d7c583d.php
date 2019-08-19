<?php $__env->startSection('content'); ?>

<div class="container">

<table style="width:100%">
  <tr>
    <th>Фото</th>
    <th>Название</th>
    <th>Категория</th>
    <th>Цена</th>
    <th>Описание</th>
  </tr>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><img src="/images/<?php echo e($product->photo); ?>" alt="Image" width="100" /></td>
    <td><?php echo e($product->name); ?></td>
    <td><?php echo e($product->category->name); ?></td>
    <td><?php echo e($product->price); ?></td>
    <td><?php echo e($product->description); ?></td>
     <td>
     <form action="/product/<?php echo e($product->id); ?>/edit" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="id" value="<?php echo e($product->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-alert">Изменить</button>
    </form>
     <form action="/product/<?php echo e($product->id); ?>/delete" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="id" value="<?php echo e($product->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
    </form>
    </td>

  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/ManagerProducts.blade.php ENDPATH**/ ?>
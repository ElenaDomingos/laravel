<?php $__env->startSection('content'); ?>

<div class="container">
<table class="table table-striped" >
<thead>
<tr>
    <th>ID</th>
    <th>Товар</th>
    <th>Дата</th>
  </tr>
  </thead>
<tbody>
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($order->id); ?></td>
<td><?php echo e($order->product_id); ?></td>
<td><?php echo e($order->created_at); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/Orders.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="container">

<h1>Manager Users</h1>


<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Action</th>
  </tr>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>   
    <td><?php echo e($user->name); ?></td>
    <td><?php echo e($user->email); ?></td>
    <td>
    <?php if($user->role === 0): ?>
     Admin
    <?php else: ?>
    User
    <?php endif; ?>    
    </td>
    <td>
   <?php if($user->role === 1): ?>
   <form action="/set/user/admin" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name" value="<?php echo e($user->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Set as Admin</button>
   <?php else: ?>
   <form action="/set/user/user" method="POST">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name" value="<?php echo e($user->id); ?>" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Set as User</button>
  <?php endif; ?>

    </form>
    </td>
   
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hecton\Desktop\Project\project04\resources\views/ManagerUsers.blade.php ENDPATH**/ ?>
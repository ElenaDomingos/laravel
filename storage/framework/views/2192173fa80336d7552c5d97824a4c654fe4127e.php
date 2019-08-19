<?php $__env->startSection('content'); ?>
            <div style="display: flex">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product" style="width: 200px; height: 200px; border: 1px solid black;  margin: 5px; padding: 5px;">
                    <div class="product-title" style="width: auto; heigth: 80;  border: 1px solid black; text-align: center; ">
                      <?php echo e($product->name); ?>

                    </div>
                    <strong>Description: </strong>
                      <p>
                        <?php echo e($product->description); ?>

                      </p>
                      <p>
                        <strong>Category: </strong> <?php echo e($product->category->name); ?>

                      </p>

            <form method="POST" action="/checkout">
             <?php echo csrf_field(); ?>
           <input type="text" id="name" name="name" value="<?php echo e($product->id); ?>" hidden>
           <button type="submit" class="btn btn-sm btn-success">Buy</butto>
           </form>
           
            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hecton\Desktop\Project\project04\resources\views//products.blade.php ENDPATH**/ ?>
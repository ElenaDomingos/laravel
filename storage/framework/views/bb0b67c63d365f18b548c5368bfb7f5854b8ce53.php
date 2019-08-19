<?php $__env->startSection('content'); ?>
  <div class="content-middle">
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
              </div>
              <div class="content-head__search-block">
                <div class="search-container">
                  <form class="search-container__form">
                    <input type="text" class="search-container__form__input">
                    <button class="search-container__form__btn">search</button>
                  </form>
                </div>
              </div>
            </div>
<div class="content-main__container">
              <div class="products-columns">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="products-columns__item">

                        <div class="products-columns__item__title-product">
                        <?php echo e($product->name); ?>

                        </div>
                    <div class="products-columns__item__thumbnail"> <img  src="/images/<?php echo e($product->photo); ?>" alt="Image" class="products-columns__item__thumbnail__img">
                    </div>
                   <div class="products-columns__item__description"><span class="products-price">
                         <?php echo e($product->price); ?>

                </span></div>

           <form method="POST" action="/order">
             <?php echo csrf_field(); ?>
           <input type="text" id="name" name="product_id" value="<?php echo e($product->id); ?>" hidden>
           <a href="/products/product/<?php echo e($product->id); ?>" class="btn btn-blue">Подробнее</a>
           </form>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($products->links()); ?>

             </div>
</div>
</div>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/products.blade.php ENDPATH**/ ?>
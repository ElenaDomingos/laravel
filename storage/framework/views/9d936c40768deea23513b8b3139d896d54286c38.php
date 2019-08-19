<?php $__env->startSection('content'); ?>

 <div class="content-middle">
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Новости</div>
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
              <div class="news-list__container">
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="news-list__item">
                  <div class="news-list__item__thumbnail"><img src="images/news/ps_vr.jpg"></div>
                  <div class="news-list__item__content">
                    <div class="news-list__item__content__news-title"><?php echo e($post->name); ?></div>
                    <div class="news-list__item__content__news-date"><?php echo e($post->created_at); ?></div>
                    <div class="news-list__item__content__news-content">
                     <?php echo e($post->content); ?>

                    </div>
                  </div>
                  <div class="news-list__item__content__news-btn-wrap"><a href="blog/single/<?php echo e($post->id); ?>" class="btn btn-brown">Подробнее</a></div>
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
          <div class="content-bottom"></div>
        </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/Blog.blade.php ENDPATH**/ ?>
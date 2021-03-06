<?php $__env->startSection('content'); ?>

  <div class="content-middle">
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">The Witcher 3: Wild Hunt в разделе action</div>
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
              <div class="news-block content-text">
                <h3 class="content-text__title"> <?php echo e($blog->name); ?> </h3>
                <img src="/images/cover/game-3.jpg" alt="Image" class="alignleft img-news">
                <p><?php echo e($blog->content); ?></p>
              </div>
            </div>
          </div>
          <div class="content-bottom">
            <div class="line"></div>
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
              </div>
            </div>
            <div class="content-main__container">
              <div class="products-columns">
                <div class="products-columns__item">
                  <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">The Witcher 3: Wild Hunt</a></div>
                  <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="/images/cover/game-1.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                  <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                  <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Overwatch</a></div>
                  <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="/images/cover/game-2.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                  <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
                <div class="products-columns__item">
                  <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Deus Ex: Mankind Divided</a></div>
                  <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="/images/cover/game-3.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                  <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/singlepost.blade.php ENDPATH**/ ?>
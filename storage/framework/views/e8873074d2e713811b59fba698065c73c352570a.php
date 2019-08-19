<?php $__env->startSection('sidebar'); ?>

<div class='sidebar'>
          <div class="sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
              <ul class="sidebar-category">
<?php
$categories = App\Category::get('name');
?>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-category__item"><a href="#" class="sidebar-category__item__link">
<?php echo e($category->name); ?>

                </a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>

<div class="sidebar-item">
            <div class="sidebar-item__title">Последние новости</div>
            <?php $posts = App\Blog::get('name') ?>
            <div class="sidebar-item__content">
              <div class="sidebar-news">
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="sidebar-news__item">
                  <div class="sidebar-news__item__preview-news"><img src="/images/cover/game-2.jpg" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                  <div class="sidebar-news__item__title-news"><a href="#" class="sidebar-news__item__title-news__link"><?php echo e($post->name); ?></a></div>
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>  </div>


        <div class="main-content">
          <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
            <div class="slider"><img src="/images/slider.png" alt="Image" class="image-main"></div>
          </div>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/libs.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/media.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="main-wrapper">
      <header class="main-header">
        <div class="logotype-container"><a href="<?php echo e(url('/')); ?>" class="logotype-link"><img src="/images/logo.png" alt="Логотип"></a></div>


 <nav class="main-navigation">
          <ul class="nav-list">

                        <!-- Authentication Links -->
                        <li class="nav-list__item">
                        <a class="nav-list__item__link" href="/">Главная</a>
                        </li>

                        <li class="nav-list__item">
                        <a class="nav-list__item__link" href="/orders/list">Мои заказы</a>
                        </li>

                         <li class="nav-list__item">
                        <a class="nav-list__item__link" href="/blog">Новости</a>
                        </li>

                         <li class="nav-list__item">
                        <a class="nav-list__item__link" href="/about">О компании</a>
                        </li>
                    </ul>
                <div class="header-contact">
          <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
        </div>
                        <?php if(auth()->guard()->guest()): ?>
                        <div class="header-container">
                            <div class="authorization-block">
                                <a class="authorization-block__link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Войти')); ?></a>
                            </div>
                            <?php if(Route::has('register')): ?>
                               <div class="authorization-block">
                                    <a class="authorization-block__link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Зарегистрироваться')); ?></a>
                               </div>
                            <?php endif; ?>
                        <?php else: ?>
                        <ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <?php if( Auth::user()->role === 0): ?>
                                     <a class="dropdown-item" href="/manage/orders/">
                                       Заказы
                                      </a>
                                        <a class="dropdown-item" href="/users">
                                       Пользователи
                                      </a>
                                      <a class="dropdown-item" href="/products/list">
                                       Редактировать Товары
                                      </a>

                                    <a class="dropdown-item" href="/products/create">
                                      Добавить товар
                                    </a>

                                   <a class="dropdown-item" href="/categories">
                                      Категории
                                    </a>
                                  <?php else: ?>

                                  <?php endif; ?>


                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Выход')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </nav>

        </div>
      </header>

        <div class="middle">

            <?php echo $__env->yieldContent('sidebar'); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>  </div>
<footer class="footer">
            <?php echo $__env->yieldContent('footer'); ?>
 </footer>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Elena\Desktop\project04\resources\views/layouts/app.blade.php ENDPATH**/ ?>
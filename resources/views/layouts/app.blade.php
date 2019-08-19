<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="main-wrapper">
      <header class="main-header">
        <div class="logotype-container"><a href="{{ url('/') }}" class="logotype-link"><img src="/images/logo.png" alt="Логотип"></a></div>


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
                        @guest
                        <div class="header-container">
                            <div class="authorization-block">
                                <a class="authorization-block__link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </div>
                            @if (Route::has('register'))
                               <div class="authorization-block">
                                    <a class="authorization-block__link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                               </div>
                            @endif
                        @else
                        <ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if( Auth::user()->role === 0)
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
                                  @else

                                  @endif


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </nav>

        </div>
      </header>

        <div class="middle">

            @yield('sidebar')
            @yield('content')
        </div>  </div>
<footer class="footer">
            @yield('footer')
 </footer>
    </div>
</body>
</html>

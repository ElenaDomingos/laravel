@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
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
              <div class="product-container">
                <div class="product-container__image-wrap"><img src="/images/{{$product->photo}}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                  <div class="product-container__content-text__title"> {{ $product->name}}</div>
                  <div class="product-container__content-text__price">
                    <div class="product-container__content-text__price__value">
                      Цена: <b>{{ $product->price}}</b>
                      руб
                    </div>
                    <button type="submit" id='order' class="btn btn-sm btn-success">Заказать</button>

           <div id="popup">

           <form method="POST" action="/order">
           <span id='close' style='position:absolute;top:6px;right:9px;color:#fff;cursor:pointer'>x</span>
           <input type="email" name="email" placeholder="Эл. Почта">
           <input type="text" name="name" placeholder="Имя" >
            @csrf
           <input type="text" id="name" name="product_id" value="{{ $product->id }}" hidden>
           <button type="submit" class="btn btn-sm btn-success">Заказать</button>
           </form>
           </div>
                  </div>
                  <div class="product-container__content-text__description">
                      {{ $product->description }}
                  </div>
                </div>
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


@endsection
@extends('layouts.footer')



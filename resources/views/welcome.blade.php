@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
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
                    @foreach($products as $product)
                    <div class="products-columns__item">

                        <div class="products-columns__item__title-product">
                        {{ $product->name}}
                        </div>
                    <div class="products-columns__item__thumbnail"> <img  src="/images/{{$product->photo}}" alt="Image" class="products-columns__item__thumbnail__img">
                    </div>
                   <div class="products-columns__item__description"><span class="products-price">
                         {{ $product->price}}
                </span></div>

           <form method="POST" action="/order">
             @csrf
           <input type="text" id="name" name="product_id" value="{{ $product->id }}" hidden>
           <a href="/products/product/{{$product->id}}" class="btn btn-blue">Подробнее</a>
           </form>
                    </div>
                    @endforeach
                    {{ $products->links() }}
             </div>
</div>
</div>


@endsection

@extends('layouts.footer')




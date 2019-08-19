@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')

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
                @foreach ($blog as $post)
                <div class="news-list__item">
                  <div class="news-list__item__thumbnail"><img src="images/news/ps_vr.jpg"></div>
                  <div class="news-list__item__content">
                    <div class="news-list__item__content__news-title">{{$post->name}}</div>
                    <div class="news-list__item__content__news-date">{{$post->created_at}}</div>
                    <div class="news-list__item__content__news-content">
                     {{$post->content}}
                    </div>
                  </div>
                  <div class="news-list__item__content__news-btn-wrap"><a href="blog/single/{{$post->id}}" class="btn btn-brown">Подробнее</a></div>
                </div>
               @endforeach
              </div>
            </div>
          </div>
          <div class="content-bottom"></div>
        </div>


@endsection

@extends('layouts.footer')

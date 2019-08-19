@extends('layouts.app')

@section('content')

<div class="container">

<table style="width:100%">
  <tr>
    <th>Фото</th>
    <th>Название</th>
    <th>Категория</th>
    <th>Цена</th>
    <th>Описание</th>
  </tr>
  @foreach($products as $product)
  <tr>
    <td><img src="/images/{{$product->photo}}" alt="Image" width="100" /></td>
    <td>{{$product->name}}</td>
    <td>{{$product->category->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->description}}</td>
     <td>
     <form action="/product/{{$product->id}}/edit" method="POST">
    {{ csrf_field() }}
    <input type="text" name="id" value="{{$product->id}}" hidden>
    <button type="submit" class="btn btn-sm btn-alert">Изменить</button>
    </form>
     <form action="/product/{{$product->id}}/delete" method="POST">
    {{ csrf_field() }}
    <input type="text" name="id" value="{{$product->id}}" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
    </form>
    </td>

  </tr>
  @endforeach
</table>

</div>

@endsection

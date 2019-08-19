@extends('layouts.app')

@section('content')

<div class="container">

<form action="/save/categories" method="POST">
    {{ csrf_field() }}

    <label for="category"> Категория</label>
    <div class="row">
    <input type="text" name="name" class="form-control" >
    </div>
    <label for="description">Описание</label>
    <div class="row">

    <textarea name="description" id="description" cols="" rows="5" style="width: auto;"></textarea>
     </div>
    <div class="row py-2">
    <button class="btn btn-sm btn-primary" type="submit">Сохранить</button>
    </div>

</form>

<h3>All the categories</h3>
    <div class="row">
<table style="width:100%">
  <tr>
    <th>Категория</th>
    <th>Описание</th>
    <th>Действие</th>
  </tr>
  @foreach($categories as $category)
  <tr>
    <td>{{$category->name}}</td>
    <td>{{$category->description}}</td>
    <td>
    <form action="/delete/category" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $category->id }}" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
    </form>
    <form action="/category/{{$category->id}}/edit" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{$category->id}}" hidden>
    <button type="submit" class="btn btn-sm btn-alert">Изменить</button>
    </form>
    </td>

  </tr>
  @endforeach
</table>


  </div>
</div>

@endsection

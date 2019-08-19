@extends('layouts.app')

@section('content')

<div class="container">

<form action="/product/{{$product->id}}/update" method="POST" enctype="multipart/form-data" >
@csrf
<div class="row form-group">
<label for="name">Название товара</label>
<input type="text" name="name" class="form-control"  value="{{$product->name}}">
</div>

<div class="row  form-group">
<label for="name">Категория</label>
<select name="category_id" id="category" class="form-control">
@foreach($categories as $category)
<option value="{{$category->category_id}}">{{$category->name}}</option>
@endforeach

</select>

<label for="name">Цена</label>
<input type="text" name="price" class="form-control" value="{{$product->price}}">
</div>

<div class="row form-group">
<label for="name">Описание</label>
<textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
</div>

<div class="row form-group">
<label for="name">Картинка</label>
<input type="file" name="photo" class="form-control-file">
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

@endsection

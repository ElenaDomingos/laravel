@extends('layouts.app')

@section('content')

<div class="container">

<div class="product-list">


<form action="/category/{{$editCategory->id}}/update" method="POST">
    {{ csrf_field() }}

    <label for="category"> Категория</label>
    <div class="row">
    <input type="text" name="name" class="form-control" value="{{ $editCategory->name }}" >
    </div>
    <label for="description">Описание</label>
    <div class="row">

    <textarea name="description" id="description" cols="" rows="5" style="width: auto;">{{ $editCategory->description }}</textarea>
     </div>
    <div class="row py-2">
    <button class="btn btn-sm btn-primary" type="submit">Сохранить</button>
    </div>

</form>


</div>

@endsection

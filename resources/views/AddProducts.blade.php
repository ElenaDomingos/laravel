@extends('layouts.app')

@section('content')

<div class="container">

<form action="/store/product" method="POST" enctype="multipart/form-data" >

{{ csrf_field() }}
<div class="row form-group">
<label for="name">Название товара</label>
<input type="text" name="name" class="form-control">
@if ($errors->has('name'))
             <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</div>

<div class="row  form-group">
<label for="name">Категория</label>
<select name="category_id" id="category" class="form-control">
@foreach($categories as $category)
<option value="{{$category->category_id}}">{{$category->name}}</option>
@endforeach

</select>

<label for="name">Стоимость</label>
<input type="text" name="price" class="form-control">
@if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
</div>

<div class="row form-group">
<label for="name">Описание</label>
<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
@if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
</div>

<div class="row form-group">
<label for="name">Photo</label>
<input type="file" name="photo" class="form-control-file">
@if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                       @endif
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

@endsection

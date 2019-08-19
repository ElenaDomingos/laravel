@extends('layouts.app')

@section('content')

<div class="container">

<h1>Управление пользователями</h1>


<table style="width:100%">
  <tr>
    <th>Имя</th>
    <th>Email</th>
    <th>Роль</th>
    <th>Действие</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>
    @if($user->role === 0)
     Admin
    @else
    User
    @endif
    </td>
    <td>
   @if($user->role === 1)
   <form action="/set/user/admin" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{$user->id}}" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Дать права администратора</button>
   @else
   <form action="/set/user/user" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{$user->id}}" hidden>
    <button type="submit" class="btn btn-sm btn-danger">Права пользователя</button>
  @endif

    </form>
    </td>

  </tr>
  @endforeach
</table>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-striped" >
<thead>
<tr>
    <th>ID</th>
    <th> Email клиента</th>
    <th>Товар</th>
    <th>Дата</th>
  </tr>
  </thead>
<tbody>
@foreach($orders as $order)
<tr>
<td>{{$order->order_id}}</td>
<td>{{$order->user_email}}</td>
<td>{{$order->product_id}}</td>
<td>{{$order->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>

@endsection

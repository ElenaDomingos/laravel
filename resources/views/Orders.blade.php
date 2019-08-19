@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-striped" >
<thead>
<tr>
    <th>ID</th>
    <th>Товар</th>
    <th>Дата</th>
  </tr>
  </thead>
<tbody>
@foreach($orders as $order)
<tr>
<td>{{$order->id}}</td>
<td>{{$order->product_id}}</td>
<td>{{$order->created_at}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>

@endsection

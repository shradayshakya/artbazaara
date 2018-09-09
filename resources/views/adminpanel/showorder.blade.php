@extends('adminpanel.layouts.adminmaster')


@section('content')
<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order id</th>
      <th scope="col">Product name</th>
      <th scope="col">User email</th>
      <th scope="col">User phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{$order->id}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->phone}}</td>
      <td>
        <a href='{{asset("/adminpanel/showorder/confirm/$order->id")}}' class="text-white btn btn-primary">Confirm</a>
        <a href='{{asset("/adminpanel/showorder/decline/$order->id")}}' class="text-white btn btn-primary">Decline</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showorder').addClass('active');
</script>
@endsection
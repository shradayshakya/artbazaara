@extends('adminpanel.layouts.adminmaster')


@section('content')
<table class="table mt-2">
<thead class="thead-dark">
    <tr>
      <th scope="col">Delivery id</th>
      <th scope="col">Product name</th>
      <th scope="col">User email</th>
      <th scope="col">User phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($deliveries as $delivery)
    <tr>
      <td>{{$delivery->id}}</th>
      <td>{{$delivery->name}}</td>
      <td>{{$delivery->email}}</td>
      <td>{{$delivery->phone}}</td>
      <td>
        <a href='{{asset("/adminpanel/showdeliver/confirm/$delivery->id")}}' class="text-white btn btn-primary">Delivered</a>
        <a href='{{asset("/adminpanel/showdeliver/decline/$delivery->id")}}' class="text-white btn btn-primary">Cancelled</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showdeliver').addClass('active');
</script>
@endsection
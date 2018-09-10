@extends('adminpanel.layouts.adminmaster')


@section('content')
<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Delivered Orders</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr> 
      <td>{{$user->delivered_orders}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
 
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showusers').addClass('active');
</script>
@endsection
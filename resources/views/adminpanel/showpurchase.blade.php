@extends('adminpanel.layout')


@section('content')
<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Supplier</th>
      <th scope="col">Phone</th>
      <th scope="col">Cost</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($purchases as $purchase)
    <tr>
      <td>{{$purchase->id}}</th>
      <td>{{$purchase->name}}</td>
      <td>{{$purchase->supplier}}</td>
      <td>{{$purchase->phone}}</td>
      <td>{{$purchase->cost}}</td>
      <td>{{$purchase->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showpurchase').addClass('active');
</script>
@endsection
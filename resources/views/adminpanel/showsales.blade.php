@extends('adminpanel.layout')


@section('content')
<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Client email</th>
      <th scope="col">Supplier</th>
      <th scope="col">Price</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
  @foreach($sales as $sale)
    <tr>
      <td>{{$sale->id}}</td>
      <td>{{$sale->name}}</td>
      <td>{{$sale->email}}</td>
      <td>{{$sale->supplier}}</td>
      <td>{{$sale->price}}</td>
      <td>{{$sale->cost}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showsales').addClass('active');
</script>
@endsection
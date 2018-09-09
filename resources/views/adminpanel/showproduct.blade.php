@extends('adminpanel.layouts.adminmaster')


@section('content')
<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Artist</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->artist}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->price}}</td>
      <td><img src = "{{$product->image}}" width = 50 height =50></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showproduct').addClass('active');
</script>
@endsection
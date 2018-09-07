@extends('adminpanel.layout')


@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->desc}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showcategory').addClass('active');
</script>
@endsection
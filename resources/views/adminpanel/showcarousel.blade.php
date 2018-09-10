@extends('adminpanel.layouts.adminmaster')


@section('content')
<table class="table mt-2">
    @if(count($carousel) == 3)
        @foreach($carousel as $image)
        <tr>
        <td>Image {{$image->id}}</td>
        <td><img src = "{{$image->image}}" height ='70' width = '200'></th>
        <td>
                <form action = "/adminpanel/showcarousel/{{$image->id}}" method = 'post' enctype="multipart/form-data">
                {{csrf_field()}}
                    <input type="file" name='input_img' required>
                    <button type="submit" class="btn btn-dark mt-2">Update</button>
                </form>
        </td>
        </tr>
        @endforeach
    @else
        @for($id=1; $id<=3; $id++)      
        <tr>
        <td>Image {{$id}}</td>
        <td>
                <form action = "/adminpanel/showcarousel/{{$id}}" method = 'post' enctype="multipart/form-data">
                {{csrf_field()}}
                    <input type="file" name='input_img' required>
                    <button type="submit" class="btn btn-dark mt-2">Add</button>
                </form>
        </td>
        </tr>
        @endfor
    @endif
</table>
<p class='text-center'>Recommeded size: 1600x500</p>
@endsection

@section('scripts')
<script type = 'text/javascript'>
$('#showcarousel').addClass('active');
</script>
@endsection
@extends('layouts.master')
@section('content')
		<div class="container mt-5 mb-4">
			<div class="row">

                @if(preg_match("/\/(\d+)$/",url()->current(),$matches))
                
                @php($catid=$matches[1])
                @endif

                @foreach($categories as $category)
                    @if($category->id == $catid)
                    <h4 class="text-info mx-auto">{{$category->name}}</h4>
                    @endif
                @endforeach
			</div>
			<div class="d-flex flex-wrap">
			@foreach($products as $product)
				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src='{{asset("$product->image")}}' alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>{{$product->name}}</strong></h5>
					<p class="card-text">{{$product->artist}}</p>
					<a href= '{{asset("/product/$product->id")}}' class="btn btn-primary">Details</a>
				</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
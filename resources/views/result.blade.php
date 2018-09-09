@extends('layouts.master')
@section('content')
		<div class="container mt-5 mb-4">
			<div class="row">
                    <h4 class="text-info mx-auto">Results for {{$request->input('data')}}</h4>
			</div>
			@php($count = 0)
			<div class="d-flex flex-wrap">
			@foreach($productsByName as $product)
				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src='{{asset("$product->image")}}' alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>{{$product->name}}</strong></h5>
					<p class="card-text">{{$product->artist}}</p>
					<a href= '{{asset("/product/$product->id")}}' class="btn btn-primary">Details</a>
				</div>
				</div>
				@php($count++)
			@endforeach

			@foreach($productsByArtist as $product)
				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src='{{asset("$product->image")}}' alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>{{$product->name}}</strong></h5>
					<p class="card-text">{{$product->artist}}</p>
					<a href= '{{asset("/product/$product->id")}}' class="btn btn-primary">Details</a>
				</div>
				</div>
				@php($count++)
			@endforeach

			@if($count==0)
			<h5 class='text-danger'>No results to show with {{$request->input('data')}}</h5>
			@endif
		</div>
	</div>
@endsection

@section('scripts')
	@if($count == 0)
	<script type = "text/javascript">
	$('footer').addClass('fixed-bottom');
	</script>
	@endif
@endsection
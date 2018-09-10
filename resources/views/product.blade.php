@extends('layouts.master')


@section('content')
		<!--PRODUCT DESCRIPTION START-->

			@php ($product = $products[0])
		
		<div class="container mt-4">
			<div class="row">
				<div class="col-md-6">
					<img src="{{asset($product->image)}}" class="img-fluid img-thumbnail shadow-lg" style="width: 100%;height: 100%"">	
				</div>

				<div class="col-md-6">
						</br>
						</br>
						<h2>{{$product->name}}</h2>
						<h4>By: {{$product->artist}}</h4>
					</br>
						<p>
							<strong>Category:</strong>
							{{$product->category}}
						</p>

					</br>
						<h4>Rs.{{$product->price}}</h4>

					</br>	
					@if(!$product->sold)
						@php($id = $product->id)

						@if(Auth::check())
						<a href='{{asset("/order/$id")}}' class="text-white btn btn-primary">Order</a>	
						@else
						<a href='{{asset("/login/$id")}}' class="text-white btn btn-primary">Login</a>	
						@endif
					@else
					<h3 class='text-danger'>SOLD</h3>
					@endif
				</div>
			</div>
		</div>
		<!--PRODUCT DESCRIPTION END-->
@endsection
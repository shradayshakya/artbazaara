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
						<button type="submit" class="btn btn-primary">Order</button>	
				</div>
			</div>
		</div>
		<!--PRODUCT DESCRIPTION END-->
@endsection
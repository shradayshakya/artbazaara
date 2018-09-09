@extends('layouts.master')

@section('content')
		<!--CAROUSEL BEGIN -->
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
	<li data-target="#demo" data-slide-to="0" class="active"></li>
	<li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->

<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="{{asset('img/banner-nepal-3.jpg')}}" alt="nepal art" width="1350" height="450">
	</div>	
	<div class="carousel-item">
		<img src="{{asset('img/nepal-Banner.jpg')}}" alt="traditional" width="1350" height="450">
	</div>
	<div class="carousel-item">
		<img src="{{asset('img/arts-banner.jpg')}}" alt="nepal" width="1350" height="450">
	</div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
	<span class="carousel-control-next-icon"></span>
</a>
</div>
<!--CAROUSEL END-->



<!--NEW ARRIVALS-->
<div class="container mt-5">
		<div class="row">
		<h4 class="text-info mx-auto">New Arrival</h4>
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
<!--END OF NEW ARRIVALS-->	


@endsection


<!--

				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src="{{asset('img/manjushri.jpg')}}" alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>Manjushri</strong></h5>
					<p class="card-text">Unknown</p>
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>

				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src="{{asset('img/maha-kala.jpg')}}" alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>Maha Kala</strong></h5>
					<p class="card-text">Samundra Maan Shrestha</p>
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>

				<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
				<img class="card-img-top shadow-lg" src="{{asset('img/vishnu.jpg')}}" alt="Card image">
				<div class="card-body">
					<h5 class="card-title"><strong>Vishnu</strong></h5>
					<p class="card-text">Unknown</p>
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>
-->
@extends('layouts.master')


@section('content')
		<div class="container mt-5 mb-4">
			<div class="row">
				<h4 class="text-info mx-auto">Results</h4>
				
			</div>
			<div class="d-flex flex-wrap">

		  		<div class="card p-3 mt-2 mx-auto top shadow-lg" style="width:250px">
			    <img class="card-img-top shadow-lg" src="{{asset('img/amogh-siddhi.png')}}" alt="Card image">
			    <div class="card-body">
			      <h5 class="card-title"><strong>Amogh Siddhi</strong></h5>
			      <p class="card-text">Samundra Maan Shrestha</p>
			      <p class="card-text">Rs.1000000</p>
			      <a href="#" class="btn btn-primary">Details</a>
			    </div>
		  		</div>
		</div>
	</div>
@endsection
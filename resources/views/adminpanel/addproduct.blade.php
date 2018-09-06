@extends('adminpanel.layout')

@section('content')
<!-- form -->
<div class="card mt-4 mx-auto w-75">
			<h5 class="card-header bg-primary text-white text-center">Register product</h2>
			<form class="card-body" id = 'registrationForm' action ="/addproduct" method="POST"> 
			{{csrf_field()}}

				<div class="row">
					<div class="col mt-4">
						<label for="name">Product Name</label>
						<input type="text" class="form-control" name='name' placeholder="Product name">
					</div>
				</div>

                <div class="row">
					<div class="col mt-4">
						<label for="artist">Artist</label>
						<input type="text" class="form-control" name='artist' placeholder="Artist">
					</div>
				</div>
					

                <div class = "row">
                    <div class = "col mt-4">
                    <label for="category">Category</label>
                    <select class = "form-control" name="category">
                        <option value = "Pauwa">Pauwa</option>
                        <option value = "Metal Statue">Metal Statue</option>
                    </select>
                    </div>
                </div>

				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="cost">Cost</label>
						<input type="number" class="form-control" name ='cost' placeholder="Cost">
					</div>
					<div class="col-md-6 mt-4">
						<label for="price">Price</label>
						<input type="number" class="form-control" name = 'price' placeholder="Price">
					</div>
				</div>

				<div class="d-flex justify-content-center mt-4">
						<button type="submit" class="btn btn-primary mt-2">Register</button>
				</div>
			</form>
		</div>
@endsection
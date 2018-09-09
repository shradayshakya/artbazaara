@extends('adminpanel.layouts.adminmaster')

@section('content')
<!-- form -->
<div class="card mx-auto w-75 mt-2">
			<h5 class="card-header bg-dark text-white text-center">Register product</h2>
			<form class="card-body" id = 'registrationForm' action ="/adminpanel/addproduct" method="POST"> 
			{{csrf_field()}}

				<div class="row">
					<div class="col mt-4">
						<label for="name">Product Name</label>
						<input type="text" class="form-control" name='name' placeholder="Product name" required>
					</div>
				</div>

                <div class="row">
					<div class="col mt-4">
						<label for="artist">Artist</label>
						<input type="text" class="form-control" name='artist' placeholder="Artist" required>
					</div>
				</div>
					

                <div class = "row">
                    <div class = "col mt-4">
                    <label for="category">Category</label>
                    <select class = "form-control" name="category">
					@foreach($categories as $category)
                        <option value = "{{$category->id}}">{{$category->name}}</option>
					@endforeach
                    </select>
                    </div>
                </div>

				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="supplier">Supplier</label>
						<input type="text" class="form-control" name ='supplier' placeholder="Supplier" required>
					</div>
					<div class="col-md-6 mt-4">
						<label for="phone">Contact number</label>
						<input type="text" class="form-control" name = 'phone' placeholder="Price" required>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="cost">Cost</label>
						<input type="number" class="form-control" name ='cost' placeholder="Cost" required>
					</div>
					<div class="col-md-6 mt-4">
						<label for="price">Price</label>
						<input type="number" class="form-control" name = 'price' placeholder="Price" required>
					</div>
				</div>

				<div class="d-flex justify-content-center mt-4">
						<button type="submit" class="btn btn-dark mt-2">Register</button>
				</div>
			</form>
		</div>
@endsection


@section('scripts')
<script type = 'text/javascript'>
$('#addproduct').addClass('active');
</script>
@endsection
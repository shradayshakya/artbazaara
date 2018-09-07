@extends('adminpanel.layout')

@section('content')
<!-- form -->
<div class="card mx-auto w-75 mt-2">
			<h5 class="card-header bg-dark text-white text-center">Add Category</h2>
			<form class="card-body" id = 'registrationForm' action ="/adminpanel/addcategory" method="POST"> 
			{{csrf_field()}}

				<div class="row">
					<div class="col mt-4">
						<label for="name">Category Name</label>
						<input type="text" class="form-control" name='name' placeholder="Category name" required>
					</div>
				</div>

                <div class="row">
					<div class="col mt-4">
						<label for="desc">Description</label>
						<textarea class="form-control" name='desc'></textarea>
					</div>
				</div>

                <div class="d-flex justify-content-center mt-4">
						<button type="submit" class="btn btn-dark mt-2">Add</button>
				</div>
			</form>
		</div>
@endsection


@section('scripts')
<script type = 'text/javascript'>
$('#addcategory').addClass('active');
</script>
@endsection
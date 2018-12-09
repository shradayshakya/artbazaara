@extends('layouts.master')

@section('content')
		<!-- form -->
		<div class="card mt-4 mx-auto w-75">
			<h5 class="card-header bg-primary text-white text-center">SIGN UP</h5>
			<form class="card-body" id = 'registrationForm' action ="/signup" method="POST"> 
			{{csrf_field()}}
				<div class="row">
					<div class="col mt-4">
						<label for="name">Name</label>
						<input type="text" class="form-control" name = 'name' placeholder="Enter name" required>
					</div>
				</div>

				<div class="row">
					<div class="col mt-4">
						<label for="email">Email</label>
						<input type="email" class="form-control" name='email' placeholder="Email" required>
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="pword">Password</label>
						<input type="password" class="form-control" id = 'password'name ='password' placeholder="Password" required>
					</div>
					<div class="col-md-6 mt-4">
						<label for="cpword">Confirm password</label>
						<input type="password" class="form-control" id = 'password_confirmation' name ='password_confirmation' placeholder="Confirm password" required>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="phone">Phone number</label>
						<input type="text" class="form-control" name = 'phone' placeholder="Phone number" required>
					</div>
					<div class="col-md-6 mt-4">
						<label for="address">Address</label>
						<input type="text" class="form-control" name='address' placeholder="Address" required>
					</div>
				</div>

				<div class="	mt-4">
						<button type="submit" class="btn btn-primary mt-2">Sign up</button>
				</div>
			</form>

			@if($errors->all())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			 @endif
		</div>
@endsection

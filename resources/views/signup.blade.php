@extends('layouts.master')

@section('content')
		<!-- form -->
		<div class="card mt-4 mx-auto w-75">
			<h5 class="card-header bg-primary text-white text-center">SIGN UP</h2>
			<form class="card-body" id = 'registrationForm' action ="/signup" method="POST"> 
			{{csrf_field()}}
				<div class="row">
					<div class="col mt-4">
						<label for="name">Name</label>
						<input type="text" class="form-control" name = 'name' placeholder="Enter name">
						<span class='formMessage text-danger m-2' id='firstNameMessage'>
							Enter name
						</span>
					</div>
				</div>

				<div class="row">
					<div class="col mt-4">
						<label for="email">Email</label>
						<input type="email" class="form-control" name='email' placeholder="Email">
						<span class='formMessage text-danger m-2' id='emailMessage'>
								Enter a valid email address
						</span>
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="pword">Password</label>
						<input type="password" class="form-control" id = 'password'name ='password' placeholder="Password">
						<span class='formMessage text-danger m-2' id='passwordMessage'>
								Password should be atleat 8 characters
						</span>
					</div>
					<div class="col-md-6 mt-4">
						<label for="cpword">Confirm password</label>
						<input type="password" class="form-control" id = 'password_confirmation' name ='password_confirmation' placeholder="Confirm password">
						<span class='formMessage text-danger m-2' id='confirmPasswordMessage'>
								Those passwords didn't match 
						</span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 mt-4">
						<label for="phone">Phone number</label>
						<input type="text" class="form-control" name = 'phone' placeholder="Phone number">
						<span class='formMessage text-danger m-2' id='phoneMessage'>
								Enter your phone number
						</span>
					</div>
					<div class="col-md-6 mt-4">
						<label for="address">Address</label>
						<input type="text" class="form-control" name='address' placeholder="Address">
						<span class='formMessage text-danger m-2' id='addressMessage'>
								Enter your address
						</span>
					</div>
				</div>

				<div class="d-flex justify-content-center mt-4">
						<button type="submit" class="btn btn-primary mt-2">Sign up</button>
				</div>
			</form>
		</div>
@endsection

@section('scripts')
<script src="{{asset('js/validation.js')}}"></script>
@endsection
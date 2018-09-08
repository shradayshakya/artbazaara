@extends('layouts.master')


@section('content')
		<!--Login form-->
		<div class="card mt-2 mt-md-5 mx-auto" style="width: 300px">
			<form class="card-body" action = '{{asset("/login")}}' method = 'POST' id = 'loginForm'>
				{{csrf_field()}}
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" name = 'email' placeholder="Enter email address">
					<span class="text-danger m-2 loginMessage" id="emailMessage">
						Enter email
					</span>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name = 'password' placeholder="Enter password">
					<span class = "text-danger m-2 loginMessage" id="pwordMessage">
						Enter password
					</span>
				</div>

				<div class="form-group form-check">
					<a href="{{asset('/signup')}}" class="badge badge-pill badge-primary">Sign Up</a>
				</div>

					<button type="submit" id = 'logButton' class="btn btn-primary form-control">Log in</button>
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


		
@section('scripts')
<script src="{{asset('js/logVal.js')}}"></script>
<script type = "text/javascript">
	$('footer').addClass('fixed-bottom');
</script>
@endsection
@extends('layouts.master')


@section('content')
		<!--Login form-->
		<div class="card mt-2 mt-md-5 mx-auto" style="width: 300px">
			<form class="card-body" id = 'loginForm'>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" name = 'email' placeholder="Enter email address">
					<span class="text-danger m-2 loginMessage" id="emailMessage">
						Enter email
					</span>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name = 'pword' placeholder="Enter password">
					<span class = "text-danger m-2 loginMessage" id="pwordMessage">
						Enter password
					</span>
				</div>

				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input">
					<label for="rememberme" class="form-check-label">Remember me</label>
					<a href="{{asset('/signup')}}" class="badge badge-pill badge-primary ml-5">Sign Up</a>
				</div>

					<button type="submit" id = 'logButton' class="btn btn-primary form-control">Log in</button>
			</form>
		</div>
@endsection
		
@section('scripts')
<script src="{{asset('js/logVal.js')}}"></script>
<script type = "text/javascript">
	$('footer').addClass('fixed-bottom');
</script>
@endsection
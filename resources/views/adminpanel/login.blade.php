<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artbazaara Adminpanel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
	<style>
	body{
		background: url('/img/admin-bg.jpg');
	}
	</style>

  <body>

<!--Login form-->
<div class="card mt-2 mt-md-5 mx-auto" style="width: 300px">
<img src="{{asset('img/logo.png')}}" alt = "artBazaara" width ="98" height="62" class="mx-auto" style="border-bottom: 1px solid blue;" >
			<form class="card-body" action = '{{asset("/adminpanel/login")}}' method = 'POST' id = 'loginForm'>
				{{csrf_field()}}

				@if(isset($productId))
				<input type = "hidden" name = 'productId' value = "{{$productId[0]}}">
				@endif

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" name = 'email' placeholder="Enter email address" required>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name = 'password' placeholder="Enter password" required>
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

    @include('adminpanel.layouts.footer')
    @yield('scripts')
  </body>
</html>

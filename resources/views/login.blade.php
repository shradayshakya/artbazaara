
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

	<!--NAVBAR BEGIN -->
	<nav class="nav navbar-expand-md navbar-light bg-light sticky-top">
		<button class= "navbar-toggler mr-auto" type = "button" data-toggle = "collapse" data-target = "#navbarToggler01">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class ="navbar-brand" href="{{asset('/')}}">
			<img src="{{asset('img/logo.png')}}" alt = "artBazaara" width ="100" height="70" class="d-inline-block align-top" >
		</a>

		<div class="collapse navbar-collapse" id="navbarToggler01">
			 <nav class="nav d-flex flex-column flex-md-row w-100 justify-content-end">

				
				<form action="" class="form-inline form-md justify-content-center pl-5">
					<div class="input-group">
					<input type="text" class="form-control">
			
						<div class="input-group-append">
							<button type="button" class="btn btn-link">
							<span class="fa fa-search"></span>
							</button>
						</div>
					</div>
				</form>

				<div class="nav-item dropdown">
     				<a class="nav-link text-dark dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
     				   Categories
     				 </a>
     				 <div class="dropdown-menu">
     				   <a class="dropdown-item" href="#">Thanka</a>
     				   <a class="dropdown-item" href="#">Pauwa</a>
     				   <a class="dropdown-item" href="#">Metal Statue</a>
     				 </div>
    			</div>

				<a class="flex-full text-dark nav-link" href ="{{asset('/aboutus')}}">About us</a>
				<a class="flex-full text-dark nav-link" href ="{{asset('/login')}}">Log in</a>
			</nav>
		</div>
	</nav>
		<!--NAVBAR END-->

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


  		<!-- Footer -->
		<footer class="bg-primary text-white text-center p-3 fixed-bottom">

		  <!-- Copyright -->
		  <div class="footer-copyright">© 2018 Copyright: ArtBazaara.com
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->



		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('js/logVal.js')}}"></script>
</body>
</html>

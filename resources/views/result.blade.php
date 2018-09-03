<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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




  		<!-- Footer -->
		<footer class="page-footer font-small bg-primary text-white">

		  <!-- Copyright -->
		  <div class="footer-copyright text-center p-3">© 2018 Copyright:
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->

	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

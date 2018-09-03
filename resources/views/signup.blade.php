
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<!--NAVBAR BEGIN -->
	<nav class="nav navbar-expand-md navbar-light bg-light sticky-top">
		<button class= "navbar-toggler mr-auto" type = "button" data-toggle = "collapse" data-target = "#navbarToggler01">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class ="navbar-brand" href="#" href="#">
			<img src="img/logo.png" alt = "artBazaara" width ="100" height="70" class="d-inline-block align-top" >
		</a>

		<div class="collapse navbar-collapse" id="navbarToggler01">
			 <nav class="nav d-flex flex-column flex-md-row w-100 justify-content-end">

				
				<form action="" id="" class="form-inline form-md justify-content-center pl-5">
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

				<a class="flex-full text-dark nav-link" href ="">About us</a>
				<a class="flex-full text-dark nav-link" href ="">Log in</a>
			</nav>
		</div>
	</nav>
		<!--NAVBAR END-->

		<!-- form -->
		<div class="card mt-4 mx-auto w-75">
			<h5 class="card-header bg-primary text-white text-center">SIGN UP</h2>
			<form class="card-body" id = 'registrationForm' action ="" method="post"> 
				<div class="row">
					<div class="col-md-6  mt-4">
						<label for="fname">First name</label>
						<input type="text" class="form-control" name = 'fname' placeholder="First name">
						<span class='formMessage text-danger m-2' id='firstNameMessage'>
							Enter first name
						</span>
					</div>
					<div class="col-md-6 mt-4">
						<label for="fname">Last name</label>
						<input type="text" class="form-control" name = 'lname' placeholder="Last name">
						<span class='formMessage text-danger m-2' id='lastNameMessage'>
								Enter last name
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
						<input type="password" class="form-control" name ='pword' placeholder="Password">
						<span class='formMessage text-danger m-2' id='passwordMessage'>
								Password should be atleat 8 characters
						</span>
					</div>
					<div class="col-md-6 mt-4">
						<label for="cpword">Confirm password</label>
						<input type="password" class="form-control" name = 'cpword' placeholder="Confirm password">
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


  		<!-- Footer -->
		<footer class="page-footer font-small bg-primary text-white mt-4"> 

		  <!-- Copyright -->
		  <div class="footer-copyright text-center p-3">© 2018 Copyright: ArtBazaara.com
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->




		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/validation.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>	
</body>
</html>

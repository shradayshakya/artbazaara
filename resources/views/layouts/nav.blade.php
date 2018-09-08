<!--NAVBAR BEGIN -->
<nav class="nav navbar-expand-md navbar-light bg-light sticky-top">
		<button class= "navbar-toggler mr-auto" type = "button" data-toggle = "collapse" data-target = "#navbarToggler01">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class ="navbar-brand" href="{{asset('/')}}">
			<img src="{{asset('img/logo.png')}}" alt = "artBazaara" width ="98" height="62" class="d-inline-block align-top" >
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
					  @foreach($categories as $category)
					  @php ($name = $category->name)
     				   <a class="dropdown-item" href={{asset("/result/$name")}}>{{$name}}</a>
					  @endforeach
     				 </div>
    			</div>

				<a class="flex-full text-dark nav-link" href ="{{asset('/aboutus')}}">About us</a>
				<!---->

				@if(Auth::check())
				<span class ="flex-full text-dark nav-link">{{ Auth::user()->name}} 
				</span>
				<a class="flex-full text-dark nav-link" href ="{{asset('/logout')}}">Log out</a>
				@else
				<a class="flex-full text-dark nav-link" href ="{{asset('/login')}}">Log in</a>
				@endif

			</nav>
		</div>
	</nav>
		<!--NAVBAR END-->

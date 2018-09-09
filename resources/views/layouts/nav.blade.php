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
				<form action='{{asset("/result")}}' method = 'post' class="form-inline form-md justify-content-center pl-5">
				{{csrf_field()}}
					<div class="input-group">
					<input type="text" name = 'data' placeholder = 'Enter keywords here' class="form-control">
						<div class="input-group-append">
							<button type="submit" class="btn btn-link">
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
					  @php ($id = $category->id)
     				   <a class="dropdown-item" href='{{asset("/category/$id")}}'>{{$category->name}}</a>
					  @endforeach
     				 </div>
    			</div>

				@if(Auth::check())	
				<a class="flex-full text-dark nav-link" href ="{{asset('/logout')}}">Log out</a>
				<span class ="flex-full text-dark nav-link small text-muted" disabled>{{ Auth::user()->name}} 
				</span>
				@else
				<a class="flex-full text-dark nav-link" href ="{{asset('/login')}}">Log in</a>
				@endif

			</nav>
		</div>
	</nav>
		<!--NAVBAR END-->

<header>
	<div class="header_top">
		<div class="container-fluid">	
			<div class="row">
				<div class="col-md-6">	
					<ul class="nav">
						<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-envelope"></i> duckhai151@gmail.com</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.facebook.com/duckhai151"><i class="fab fa-facebook-square"></i></a></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-google-plus-square"></i></a></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
					</ul> 
				</div>
				<div class="col-md-6">	
					<ul class="nav justify-content-end">
						<ul class="nav">		
							@if(Auth::check())
								<li class="nav-item"><a href="#" class="nav-link">Hello, {{Auth::user()->name}}</a></li>
								<li class="nav-item"><a class="nav-link" href="{{route('home.getLogout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
							@else
								<li class="nav-item"><a class="nav-link" href="{{route('home.getLogin')}}"><i class="fas fa-key"></i> Login</a></li>
							@endif
							<li class="nav-item"><a class="nav-link" href="{{route('home.cartIndex')}}"><i class="fas fa-shopping-cart"></i> Cart</a></li>
						</ul>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<div class="header_middle">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
						<a class="navbar-brand" href="{{route('home')}}">
    						<img src="{{url('home/image/logoshop.jpg')}}" alt="Logo" style="width:40px;">
  						</a>
						<a class="navbar-brand" href="#">KSHOP</a>
						<ul class="navbar-nav mr-auto">
							<li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category</a>
								<div class="dropdown-menu">
									@foreach($categories as $category)
										<a class="dropdown-item" href="{{route('home.category', $category->id)}}">{{$category->name}}</a>
									@endforeach
								</div>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
						</ul>
						<form class="form-inline" action="{{route('home.search')}}" method="post">
							@csrf
							<input class="form-control" type="text" name="key" id="key" placeholder="Search"> 
							<button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>	
						</form>
					</nav>
					<hr>
				</div>
			</div>
		</div>
	</div>
</header>
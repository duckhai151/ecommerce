<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title','Master Page')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				@include('backEnd.layouts.menu')
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						@include('backEnd.layouts.header')
					</div>
					<div class="col-md-10 offset-md-1">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		@yield('js')
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="{{url('homepage/k.png')}}" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>@yield('title','Master Page')</title>
	<link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	{{-- <link href="{{asset('frontEnd/css/fontawesome.min.css')}}" rel="stylesheet"> --}}
</head>
<body>
@include('frontEnd.layouts.header')	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			@include('frontEnd.layouts.category_menu')
		</div>
		<div class="col-md-9">
			@yield('content')
		</div>
	</div>
</div>


{{-- <script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script> --}}
<script language="javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('js')
</body>
</html>	
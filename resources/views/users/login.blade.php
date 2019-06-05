@extends('frontEnd.layouts.master')
@section('title','Login')
@section('content')
<div class="row">
	<div class="col-md-6">
		<h4>Register</h4>
		<hr>
		<form action="{{route('home.postRegister')}}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password_confirm">
			</div>
			<input type="submit" class="btn btn-success" value="Register">
			<input type="reset" class="btn btn-danger" value="Reset">
		</form>
		@if(session('message'))
			<br>
			<div class="alert alert-success">
				{{session('message')}}
			</div>
		@endif
	</div>
	<div class="col-md-1">
		<br><br><br><br><br>
		<h4>OR</h4>
	</div>
	<div class="col-md-5">
		<h4>Login</h4>
		<hr>
		<form action="{{route('home.postLogin')}}" method="post">
			@csrf
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<input type="submit" class="btn btn-success" value="Login">
			<input type="reset" class="btn btn-danger" value="Reset">
		</form>
		@if(session('message1'))
			<br>
			<div class="alert alert-danger">
				{{session('message1')}}
			</div>
		@endif
	</div>
</div>
@endsection
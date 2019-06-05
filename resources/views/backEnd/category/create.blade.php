@extends('backEnd.layouts.master')
@section('title','Create Category')
@section('content')
<hr>
<h3>Category <small>add</small></h3>
<hr>
<form action="{{route('category.postCreate')}}" method="post">
	@csrf
	<div class="col-md-6">
		<div class="form-group">
			<label>Category Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<button type="submit" class="btn btn-success">Add New</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</form>
@if(session('message'))
<br>
<div class="alert alert-success">
	{{session('message')}}
</div>
@endif
@endsection

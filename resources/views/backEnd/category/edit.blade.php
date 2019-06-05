@extends('backEnd.layouts.master')
@section('title','Create Category')
@section('content')
<hr>
<h3>Category <small>update</small></h3>
<hr>
<form action="{{route('category.postEdit',$category->id)}}" method="post">
	@csrf
	<div class="col-md-6">
		<div class="form-group">
			<label>Category Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="{{$category->name}}">
		</div>
		<button type="submit" class="btn btn-success">Update</button>
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

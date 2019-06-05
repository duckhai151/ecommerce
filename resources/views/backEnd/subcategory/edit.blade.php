@extends('backEnd.layouts.master')
@section('title','Create SubCategory')
@section('content')
<hr>
<h3>SubCategory <small>edit</small></h3>
<hr>
<form action="{{route('subcategory.postEdit',$subcategory->id)}}" method="post">
	@csrf
	<div class="col-md-6">
		<div class="form-group">
			<label>SubCategory Name</label>
			<input type="text" class="form-control" name="name" id="name" value="{{$subcategory->name}}">
		</div>
		<div class="form-group">
			<label for="email">Category Lavel</label>
				<div class="form-group">
					<select name="cate_id" id="cate_id" class="form-control">
						@foreach($categories as $category)
							@if($category == $subcategory->category)						
							<option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
							@else
							<option value="{{$category->id}}" >{{$category->name}}</option>
							@endif
						@endforeach
					</select>
				</div>
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

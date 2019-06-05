@extends('backEnd.layouts.master')
@section('title','List Categories')
@section('content')
<hr>
<h4>Categories</h4>
<hr>
<table class="table table-bordered table-hover table-striped">
	<thead class="thead-dark">
		<tr>
			<th>Category Name</th>
			<th>SubCategory Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
			<tr>
				<th>{{ $category->name }}</th>
				<th>
					@foreach($category->subcategories as $subcategory)
						{{$subcategory->name}} <br>
					@endforeach
				</th>
				<th>{{ $category->created_at }}</th>
				<th>
					<a href="{{route('category.getEdit',$category->id)}}" class="btn btn-success">Edit</a>
					<a href="{{route('category.getDelete',$category->id)}}" class="btn btn-danger">Delete</a>
				</th>
			</tr>
		@endforeach
	</tbody>
</table>
{{$categories->links()}}
@if(session('message'))
<br>
<div class="alert alert-success">
	{{session('message')}}
</div>
@endif
@endsection
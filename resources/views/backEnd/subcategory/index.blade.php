@extends('backEnd.layouts.master')
@section('title','List SubCategories')
@section('content')
<hr>
<h4>Categories</h4>
<hr>
<table class="table table-bordered table-hover table-striped">
	<thead class="thead-dark">
		<tr>
			<th>SubCategory Name</th>
			<th>Category Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($subcategories as $subcategory)
			<tr>
				<th>{{ $subcategory->name }}</th>
				<th>{{ $subcategory->category->name }}</th>
				<th>{{ $subcategory->created_at }}</th>
				<th>
					<a href="{{route('subcategory.getEdit',$subcategory->id)}}" class="btn btn-success">Edit</a>
					<a href="{{route('subcategory.getDelete',$subcategory->id)}}" class="btn btn-danger">Delete</a>
				</th>
			</tr>
		@endforeach
	</tbody>
</table>
{{$subcategories->links()}}
@if(session('message'))
	<div class="alert alert-success">
		{{session('message')}}
	</div>
@endif
@endsection
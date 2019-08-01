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
			<th>ParentCategory Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<?php
			$parent_cates = DB::table('categories')->select('name')->where('id',$category->parent_id)->get();
		?>
			<tr>
				<th>{{ $category->name }}</th>
				<th>
					@foreach($parent_cates as $parent_cate)
						{{$parent_cate->name}}
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
@extends('backEnd.layouts.master')
@section('title','Create Category')
@section('content')
<hr>
<h3>Category <small>add</small></h3>
<hr>
<?php 
	$categories = DB::table('categories')->get();
	function showCategories($categories, $parent_id = 0, $char = '')
		{
			foreach($categories as $key => $item)
    		{
		        if($item->parent_id == $parent_id)
		        {
		        	$parent = DB::table('categories')->select('name')->where('id', $parent_id)->get();
		            echo '<option value="' .$item->id . '"class="list-group-item">';
		                	echo $char . $item->name;
		            echo '</option>';
		            unset($categories[$key]);
		            showCategories($categories, $item->id, $char. '---');
		        }
		    }
		}
?>
<form action="{{route('category.postCreate')}}" method="post">
	@csrf
	<div class="col-md-6">
		<div class="form-group">
			<label>Category Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<div class="form-group">
			<label>Category Parent</label>
			<select class="form-control" name="parent_id" id="parent_id">
				<option value="0">Select Category</option>
				<?php showCategories($categories); ?>
	    	</select>
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

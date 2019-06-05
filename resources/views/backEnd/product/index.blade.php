@extends('backEnd.layouts.master')
@section('title','List Categories')
@section('content')
<hr>
<h4>Categories</h4>
<hr>
<table class="table table-bordered table-hover table-striped">
	<thead class="thead-dark">
		<tr>
			<th>Product Name</th>
			<th>Subcate/Category Name</th>
			<th>Image</th>
			<th>Size</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Add Size</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
			<tr>
				<th>{{$product->name}}</th>
				<th>{{$product->subcategory->name}} / {{$product->subcategory->category->name}}</th>
				<th><img src="{{url('products/image',$product->img)}}" width="80px" height="70px"></th>
				<th>
					@foreach($product->productssku as $sku)
						{{$sku->size}}
						<br>
					@endforeach
				</th>
				<th>
					@foreach($product->productssku as $sku)
						{{$sku->price}}$
						<br>
					@endforeach
				</th>
				<th>
					@foreach($product->productssku as $sku)
						{{$sku->stock}}
						<br>
					@endforeach
				</th>
				<th>
					<a href="{{route('sku.index', $product->id)}}" class="btn btn-primary">Add Size</a>
				</th>
				<th>
					<a href="{{route('product.getEdit',$product->id)}}" class="btn btn-success">Edit</a>
					<a href="{{route('product.getDelete',$product->id)}}" class="btn btn-danger">Delete</a>
				</th>
			</tr>
		@endforeach
	</tbody>
</table>
{{$products->links()}}
@if(session('message'))
<br>
<div class="alert alert-success">
	{{session('message')}}
</div>
@endif
@endsection
@extends('frontEnd.layouts.master')
@section('title','Home')
@section('content')
@foreach($categories as $category)
<?php 
	$listpro = $category->products->take(4);
?>
<h4>{{strtoupper($category->name)}}</h4>
<hr>
<div class="container">
	<div class="row">
		@foreach($listpro as $product)
			<?php
				$data = $product->productssku->first();
			?>
			<div class="col-md-3">
				<div class="productinfo">
					<a href="{{route('home.product',$data['id'])}}"><img src="{{url('products/image/',$product['img'])}}" alt="" width="100px" height="230px" /></a>
					<h6>{{$product->name}}</h6>
					<p>Size: {{$data['size']}}</p>
					<h5>${{$data['price']}}</h5>
					<a href="{{route('home.product',$data['id'])}}" class="btn btn-info">View Product</a>
				</div>		
			</div>
		@endforeach
	</div>
</div>
<hr>
<a href="{{route('home.category', $category->id)}}" class="btn btn-primary"><i class="fas fa-align-justify"></i> View All Product</a>
<hr>
@endforeach
@endsection

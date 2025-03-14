@extends('frontEnd.layouts.master')
@section('title','Category')
@section('content')
<h4>{{$subcategory->name}}</h4>
<hr>
<div class="row">
	@foreach($subcategory->products as $product)
		<?php
			$data = $product->productssku->first();
		?>
		<div class="col-md-4">
			<div class="productinfo">
				<a href="#"><img src="{{url('products/image/',$product['img'])}}" alt="" width="100px" height="300px" /></a>
				<h6>{{$product->name}}</h6>
				<p>Size: {{$data['size']}}</p>
				<h5>${{$data['price']}}</h5>
				<a href="{{route('home.product',$data['id'])}}" class="btn btn-info">View Product</a>
				<a href="#" class="btn btn-dark"><i class="fas fa-cart-plus"></i></a>
			</div>		
		</div>
	@endforeach
</div>
@endsection
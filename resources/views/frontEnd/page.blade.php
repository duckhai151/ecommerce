@extends('frontEnd.layouts.master')
@section('title','Home')
@section('content')
<h4>FEATURES ITEMS</h4>
<hr>
<div class="row">
	@foreach($products as $product)
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

@endsection
@extends('frontEnd.layouts.master')
@section('title','Checkout')
@section('content')
<h4>Checkout</h4>
<hr>
<div class="row">
	<div class="col-md-4">
		<div class="checkout-box">
			<h5><small>Name:</small></h5>
			<p><b>{{$order['name']}}</b></p>
			<h5><small>Mail:</small></h5>
			<p><b>{{$order['user_email']}}</b></p>
			<h5><small>Phone:</small></h5>
			<p><b>{{$order['phone']}}</b></p>
			<h5><small>Address:</small></h5>
			<p><b>{{$order['address']}}</b></p>
			<h5><small>City:</small></h5>
			<p><b>{{$order['city']}}</b></p>
		</div>
	</div>
	<div class="col-md-8">
		<table class="table table-bordered">
			<thead class="thead-light">
				<tr>
					<th>Item</th>
					<th></th>
					<th>Size</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
					<?php
					$products_img = DB::table('products')->select('img')->where('id',$item->id)->get();
					$products_size = DB::table('products_sku')->select('size')->where('id',$item->weight)->get();
					?>
					<tr>
						<th>
							@foreach($products_img as $product_img)
							<img src="{{url('products/image',$product_img->img)}}" width="100px" height="100px">
							@endforeach
						</th>
						<th>
							{{$item->name}}
							<p class="small">CodeID: {{$item->id}}</p>
						</th>
						<th>
							@foreach($products_size as $product_size)
								{{$product_size->size}}
							@endforeach
						</th>
						</th>
						<th>{{$item->qty}}</th>
						<th>{{$item->subtotal}}$</th>
					</tr>
				@endforeach
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th class="text-danger">{{Cart::total(0,0)}}$</th>
					</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-1 offset-md-10">
		<a href="{{route('home.order')}}" class="btn btn-warning">Order Now</a>
	</div>
</div>
@endsection
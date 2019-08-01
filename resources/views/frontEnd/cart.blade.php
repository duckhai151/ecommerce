@extends('frontEnd.layouts.master')
@section('title','Cart')
@section('content')
<h4>CART</h4>
<hr>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordereless table-hover">
			<thead class="thead-light">
				<tr>
					<th width="100px">Item</th>
					<th></th>
					<th>Size</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
					<th></th>
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
						<th>{{$item->price}}$</th>
						<th>
							<!-- <a href="{{url("cart?product_id=$item->id&decrease=1")}}" class="btn text-dark">-</a> --> 
							{{$item->qty}} 
							<!-- <a href="{{url("cart?product_id=$item->id&increment=1")}}" class="btn text-dark">+</a> -->
						</th>
						<th>{{$item->subtotal}}$</th>
						<th>
							<a href="{{route('home.remove', $item->rowId)}}" class="btn btn-secondary">X</a>
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	<form action="{{route('home.checkout')}}" method="post">
	@csrf
		<div class="row">
			<div class="col-md-9">
				<div class="order-box">
					<div class="form-group">
						<label>Full Name: </label><br>
						<input type="text" size="50" name="name">
					</div>
					<div class="form-group">
						<label>Email: </label><br>
						<input type="text" size="50" name="user_email">
					</div>
					<div class="form-group">
						<label>Phone: </label><br>
						<input type="text" size="50" name="phone">
					</div>
					<div class="form-group">
						<label>Address: </label><br>
						<input type="text" size="50" name="address">
					</div>
					<div class="form-group">
						<label>City: </label><br>
						<input type="text" size="50" name="city">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="total-box">
					<p><b>Total: {{Cart::total(0,0)}}$</b></p>
					<button type="submit" class="btn btn-warning">Checkout</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection
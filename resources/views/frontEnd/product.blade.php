@extends('frontEnd.layouts.master')
@section('title','Product')
@section('content')
<h4>Product</h4>
<hr>
<div class="row">
	<div class="col-md-5">
		<img src="{{url('products/image', $sku->product->img)}}" width="400px" height="400px">
	</div>
	<div class="col-md-7">
		<form action="{{route('home.cart')}}" method="post" role="form">
			@csrf
			<input type="hidden" name="product_id" value="{{$sku->product->id}}">
			<input type="hidden" name="sku_id" value="{{$sku->id}}">
			<input type="hidden" name="name" value="{{$sku->product->name}}">
			<input type="hidden" name="price" value="{{$sku->price}}">
			<div>
				<h3>{{$sku->product->name}}</h3>
				<p>Code ID: {{$sku->product->id}}</p>
				<div class="form-group">
					<select name="size">
						@foreach($sku->product->productssku as $listsku)
							<option value="{{$listsku->size}}" >{{$listsku->size}}</option>
						@endforeach
					</select>
				</div>
				<h4>${{$sku->price}}</h4>
				<label><b>Quantity:</b></label>
				<input type="text" size="1px" name="quantity" value="{{$sku->stock}}" class="text-center">
				<p><b>Availability:</b>
					@if($sku->stock > 0)
						In Stock
					@else
						Out of Stock
					@endif
				</p>
				<p><b>Condition:</b> New</p>	
				<button class="btn btn-primary">Add to Cart</button>
			</div>
		</form>
	</div>
</div>
@endsection
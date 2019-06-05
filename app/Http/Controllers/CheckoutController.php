<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order_model;
use Cart;

class CheckoutController extends Controller
{
    public function checkout(Request $request){
    	$order = $request->all();
    	Order_model::create($order);
    	$cart = Cart::content();
    	return view('frontEnd.checkout', compact('order','cart'));
    }

    public function order(){
    	Cart::destroy();
    	return view('frontEnd.index');
    }
}

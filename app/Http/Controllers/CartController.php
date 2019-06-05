<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Products_model;
use App\ProductsSKU_model;
use Cart;

class CartController extends Controller
{
	public function index(){
        $cart = Cart::content();
		return view('frontEnd.cart', compact('cart'));
	}

    public function cart()
    {
        if(Request::isMethod('post')){
           $product_id = Request::get('product_id');
           $sku_id = Request::get('sku_id');
           $sku = ProductsSKU_model::find($sku_id);
           $quantity = Request::get('quantity');
           Cart::add(array('id'=>$product_id,'name'=>$sku->product->name,'qty'=>$quantity,'price'=>$sku->price,'weight'=>$sku->id));
        }

        if(Request::get('product_id') && (Request::get('increment')) == 1) {
            $rows = Cart::search(function($key, $value) {
                return $key->id == Request::get('product_id');
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        $cart = Cart::content();
        return view('frontEnd.cart', compact('cart'));  
    }

    public function remove($id)
    {
        // $rowId = Cart::search(array('id' => $id));
        Cart::remove($id);
        $cart = Cart::content();
        return view('frontEnd.cart', compact('cart')); 
    }
}

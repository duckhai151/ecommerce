<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_model;
use App\ProductsSKU_model;

class SkuController extends Controller
{
    public function index($id){
    	$product = Products_model::find($id);
    	return view('backEnd.product.createSku', compact('product'));
    }

    public function postCreate(Request $request, $id){
    	// $this->validate($request,[
    	// 	'size' => 'unique:products_sku,size',
    	// ]);
    	$sku = new ProductsSKU_model;
    	$sku->product_id = $id;
    	$sku->size = $request->size;
    	$sku->price = $request->price;
    	$sku->stock = $request->stock;
    	$sku->save();
    	return redirect()->route('sku.index',$id)->with('message1','Added Success !');
    }

    public function postEdit(Request $request, $id){
    	// $this->validate($request,[
     //        'size' => 'unique:products_sku,size',
     //    ]);
    	$sku = ProductsSKU_model::find($id);
    	$sku->size = $request->size;
    	$sku->price = $request->price;
    	$sku->stock = $request->stock;
    	$sku->save();
    	return redirect()->route('sku.index',$sku->product_id)->with('message2','Edited Success !');
    }

    public function getDelete($id){
    	$sku = ProductsSKU_model::find($id);
    	$product_id = $sku->product_id;
    	ProductsSKU_model::find($id)->delete();
    	return redirect()->route('sku.index',$product_id)->with('message3','Deleted Success !');
    }
}

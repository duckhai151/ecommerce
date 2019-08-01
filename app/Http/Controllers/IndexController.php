<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsSKU_model;
use App\Category_model;
use App\SubCategory_model;
use App\Products_model;

class IndexController extends Controller
{
    public function index()
    {
        $products = Products_model::all();
    	return view('frontEnd.page', compact('products'));
    }

    public function product($id)
    {
    	$sku = ProductsSKU_model::find($id);
    	return view('frontEnd.product', compact('sku'));
    }

    public function subcategory($id)
    {
        $subcategory = SubCategory_model::find($id);
        return view('frontEnd.subcategory', compact('subcategory'));
    }

    public function category($id)
    {
    	$category = Category_model::find($id);
        return view('frontEnd.category', compact('category'));
    }

    public function search(Request $request)
    {
        $this->validate($request,[
            ['key' => 'required|min:1|max:255'
            ],
        ]);
        $key = $request->key;
        $products = Products_model::where('name','LIKE',"%$key%")->get();
        return view('frontEnd.search', compact('products','key'));
    }
}

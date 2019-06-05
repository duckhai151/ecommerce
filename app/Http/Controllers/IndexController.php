<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsSKU_model;
use App\Category_model;
use App\SubCategory_model;

class IndexController extends Controller
{
    public function index()
    {
    	return view('frontEnd.index');
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
}

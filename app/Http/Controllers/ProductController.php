<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products_model;
use App\SubCategory_model;
use App\Category_model;

class ProductController extends Controller
{
    public function index(){
    	$products = Products_model::paginate(10);
    	return view('backEnd.product.index',compact('products'));
    }

    public function getCreate(){
    	$subcategories = SubCategory_model::all();
        $categories = Category_model::all();
    	return view('backEnd.product.create',compact('subcategories','categories'));
    }

    public function postCreate(Request $request){
    	$product = new Products_model;
    	$this->validate($request,[
    		['name' => 'required|min:1|max:255|unique:products,name',
    		],
    	]);
    	if($request->hasFile('img')){
    		$this->validate($request,[
    			[
    				'img' => 'mimes:jpg,jpeg,pbg|max:2048',
    			],
    		]);
    		$img = $request->file('img');
	    	$product->img = $img->getClientOriginalName();
	    	$img->move('products/image', $img->getClientOriginalName());
    	}
    	
    	$product->name = $request->name;
    	$product->subcat_id = $request->subcat_id;
    	$product->save();
    	return redirect()->route('product.getCreate')->with('message','Added Success !');
    }

    public function getEdit($id){
    	$subcategories = SubCategory_model::all();
    	$product = Products_model::find($id);
    	return view('backEnd.product.edit',compact('product','subcategories'));
    }

    public function postEdit(Request $request,$id){
        $product = Products_model::find($id);
        $this->validate($request,[
            ['name' => 'required|min:1|max:255|unique:products,name',
            ],
        ]);
        if($request->hasFile('img')){
            $this->validate($request,[
                [
                    'img' => 'mimes:jpg,jpeg,pbg|max:2048',
                ],
            ]);
            $img = $request->file('img');
            $product->img = $img->getClientOriginalName();
            $img->move('products/image', $img->getClientOriginalName());
        }
        
        $product->name = $request->name;
        $product->subcat_id = $request->subcat_id;
        $product->save();
        return redirect()->route('product.getEdit',$product->id)->with('message','Edited Success !');
    }

    public function getDelete($id){
        Products_model::find($id)->delete();
        return redirect()->route('product.index')->with('message','Delete Success !');
    }
}

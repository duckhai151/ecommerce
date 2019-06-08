<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory_model;
use App\Category_model;
class SubCategoryController extends Controller
{
    public function index(){
    	$subcategories = SubCategory_model::paginate(10);
    	return view('backEnd.subcategory.index',compact('subcategories'));
    }

    public function getCreate(){
        $categories = Category_model::all();
    	return view('backEnd.subcategory.create', compact('categories'));
    }

    public function postCreate(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:255|min:1|unique:subcategories,name',
    	]);
        $subcategory = $request->all();
        SubCategory_model::create($subcategory);
    	return redirect()->route('subcategory.getCreate')->with('message','Added Success !');
    }

    public function getEdit($id){
        $subcategory = SubCategory_model::find($id);
        return view('backEnd.subcategory.edit',compact('subcategory'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,[
            'name' => 'required|max:255|min:1|unique:subcategories,name',
        ]);
        $subcategory_update = $request->all();
        $subcategory = SubCategory_model::find($id);
        $subcategory->update($subcategory_update);
        return redirect()->route('subcategory.postEdit',$id)->with('message','Edited Success !');
    }

    public function getDelete($id){
        SubCategory_model::find($id)->delete();
        return redirect()->route('subcategory.index')->with('message','Delete Success !');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_model;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category_model::paginate(10);
    	return view('backEnd.category.index', compact('categories'));
    }

    public function getCreate(){
        $categories = Category_model::all();
    	return view('backEnd.category.create', compact('categories'));
    }

    public function postCreate(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:255|min:1|unique:categories,name',
    	]);
        $category = new Category_model;
    	$category->name = $request->name;
        $category->parent_id = $request->parent_id;
    	$category->save();
    	return redirect()->route('category.getCreate')->with('message','Added Success !');
    }

    public function getEdit($id){
        $category = Category_model::find($id);
        return view('backEnd.category.edit', compact('category'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|max:255|min:1|unique:categories,name',
        ]);
        $category = Category_model::find($id);
        $category_update = $request->all();
        $category->update($category_update);
        return redirect()->route('category.getEdit',$id)->with('message','Updated Success !');
    }

    public function getDelete($id){
        Category_model::find($id)->delete();
        return redirect()->route('category.index')->with('message','Delete Success !');
    }
}

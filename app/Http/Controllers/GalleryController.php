<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($id){
    	$gallery = Gallery_model::find($id);
    	return view('backEnd.product.createGallery', compact('gallery'));
    }
}

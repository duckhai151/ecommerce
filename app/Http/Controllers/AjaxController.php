<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsSKU_model;

class AjaxController extends Controller
{
    public function getSku($number){
    	$sku = ProductsSKU_model::find($number);
    	echo "<input type='hidden' name='sku_id' value='".$sku->id."'>";
   		echo "<h4>$".$sku->price."</h4>";
		echo "<label><b>Quantity: </b></label>";
		echo "<input type='text' size='1px' name='quantity' value='".$sku->stock."' class='text-center'>";
		echo "<p><b>Availability:</b> In Stock</p>";
		echo "<p><b>Condition:</b> New</p>";
		echo "<button type='submit' class='btn btn-primary'>Add to Cart <i class='fas fa-shopping-cart'></i></button>";
    }
}

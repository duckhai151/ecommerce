<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsSKU_model extends Model
{
    protected $table = 'products_sku';
    protected $primarykey = 'id';
    protected $fillable = ['product_id','price','size','stock'];
    public function product(){
    	return $this->belongsTo('App\Products_model','product_id','id');
    }
}

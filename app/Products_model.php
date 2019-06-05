<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = ['subcat_id','name','img'];
    public function productssku()
    {
    	return $this->hasMany('App\ProductsSKU_model','product_id','id');
    }
    public function subcategory()
    {
    	return $this->belongsTo('App\SubCategory_model','subcat_id','id');
    }
    public function gallery()
    {
        return $this->hasMany('App\Gallery_model','product_id','id');
    }
}

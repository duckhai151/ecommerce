<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    protected $table = 'categories';
    protected $primarykey = 'id';
    protected $fillable = ['name'];
    public function subcategories()
    {
    	return $this->hasMany('App\SubCategory_model','cate_id','id');
    }
    public function products()
    {
    	return $this->hasManyThrough('App\Products_model','App\SubCategory_model','cate_id','subcat_id','id');
    }
}

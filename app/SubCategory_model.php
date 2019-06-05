<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory_model extends Model
{
    protected $table = 'subcategories';
    protected $primarykey = 'id';
    protected $fillable = ['id','cate_id','name'];
    public function products()
    {
    	return $this->hasMany('App\Products_model','subcat_id','id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Category_model','cate_id','id');
    }
}

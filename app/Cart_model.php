<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_model extends Model
{
	protected $table = 'cart';
    protected $primarykey = 'id';
    protected $fillable = ['product_id','name','size','price','quanlity','email'];
}

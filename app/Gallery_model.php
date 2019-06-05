<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery_model extends Model
{
    protected $table = 'gallery';
    protected $primarykey = 'id';
    protected $fillable = ['product_id','img'];
}

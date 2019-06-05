<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_model extends Model
{
    protected $table = 'orders';
    protected $primarykey = 'id';
    protected $fillable = ['user_email','name','phone','address','city'];
}

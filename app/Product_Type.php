<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Type extends Model
{
    protected $table ="type_products";
    public  function product()
    {
    	return $this->hasMany('App\Product','id_type','id');//id của bảng product
    }
}

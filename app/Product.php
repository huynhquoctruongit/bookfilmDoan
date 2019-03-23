<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    public function product_type()
    {
    	return $this->belongsTo('App\Product_Type','id_type','id');//id của bảng prodct_type
    }
    public function bill_detail()
    {
    	return $this->hasMany('App\Bill_Detail','id_type','id');//id của bảng bill_detail
    }
}

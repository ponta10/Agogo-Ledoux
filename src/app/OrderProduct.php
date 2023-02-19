<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    protected $fillable = [
        'order_id', 'product_id','amount','price'
    ];
    protected $table = "order_product";
}

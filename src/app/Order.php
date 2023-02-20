<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id', 'bill_amount'
    ];
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('amount');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'desc', 'price','stock','image'
    ];
    use SoftDeletes;
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    public function users()
    {
        return $this->belongsToMany('App\User','views','product_id','user_id');
    }
}

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
    public function tags()
    {
        return $this->belongsToMany('App\Tag','tag_products','product_id','tag_id');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    public function users()
    {
        return $this->belongsToMany('App\User','views','product_id','user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
{
    protected $fillable = [
        'name'
    ];
    use SoftDeletes;
    public function Products()
    {
        return $this->belongsToMany('App\Product','tag_products','tag_id','product_id');
    }

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagProduct extends Model
{
    protected $fillable = [
        'product_id','tag_id'
    ];
}

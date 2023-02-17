<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function show($id){
        $product = Product::find($id);
        return view('user.detail',compact('product'));
    }
}

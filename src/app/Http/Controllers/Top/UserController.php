<?php

namespace App\Http\Controllers\Top;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('user/home',compact('products'));
    }
}

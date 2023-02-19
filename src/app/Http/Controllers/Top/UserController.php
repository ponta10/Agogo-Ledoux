<?php

namespace App\Http\Controllers\Top;

use App\Cart;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $sevendays = Carbon::today()->subHour(1);
        $newProducts = Product::where('created_at', '>=', $sevendays)->get();
        $user_id = Auth::id();
        $product_carts = Cart::where('user_id', $user_id)->get();
        $product_carts_array = [];
        foreach ( $product_carts as $product ) :
            $product_carts_array[] = $product->product_id; 
        endforeach;
        return view('user/home',compact('products','newProducts','product_carts_array'));
    }
}

<?php

namespace App\Http\Controllers\Top;

use App\Cart;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {   

        $tags = Tag::all();
        $products = Product::all();
        $sevendays = Carbon::today()->subHour(1);
        $newProducts = Product::where('created_at', '>=', $sevendays)->get();
        $user_id = Auth::id();
        $product_carts = Cart::where('user_id', $user_id)->get();
        $product_carts_array = [];
        $sold_out_products = Product::where('stock',0)->get();
        $sold_out_products_array = []; 
        foreach ( $sold_out_products as $product ) :
            $sold_out_products_array[] = $product->id; 
        endforeach;
        foreach ( $product_carts as $product ) :
            $product_carts_array[] = $product->product_id; 
        endforeach;
        $popular_products = Product::withCount('orders')->orderBy('orders_count','desc')->limit(3)->get();
        return view('user/home',compact('products','newProducts','product_carts_array','sold_out_products_array','popular_products'));
    }
}

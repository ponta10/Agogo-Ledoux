<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::id();
        $items = Cart::where('user_id', $user_id)->join('products', 'carts.product_id', '=', 'products.id')->get();
        return view('cart.show', compact('items'));
    }
}

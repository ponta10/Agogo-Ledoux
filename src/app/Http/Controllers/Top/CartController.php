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
        $items = Cart::where('user_id', $user_id)->join('products', 'carts.product_id', '=', 'products.id')->select('carts.id', 'image', 'name', 'stock', 'amount', 'price')->get();
        return view('cart.show', compact('items'));
    }
    public function delete($id)
    {
        $item = Cart::where('carts.id', $id)->join('products', 'carts.product_id', '=', 'products.id')->first();
        return view('cart.delete', compact('item'));
    }
    public function destroy($id){
        Cart::destroy($id);
        return redirect('/user/cart');
    }
}

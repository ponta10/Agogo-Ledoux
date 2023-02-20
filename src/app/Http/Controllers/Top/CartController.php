<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Order;
use App\OrderProduct;
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
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('user.cart');
    }

    public function store(Request $request)
    {
        if(!Auth::guard()->check()){
            return redirect()->route('login');
        }
        $user_id = Auth::id();
        Cart::create(
            [
                'user_id' => $user_id,
                'product_id' => $request->input('cart'),
                'amount' => 1,
            ]
        );
        return redirect()->route('user.cart');
    }

    public function buy(Request $request)
    {
        $user_id = Auth::id();
        Order::create(
            [
                'user_id' => $user_id,
                'bill_amount' => $request->input('order')
            ]
        );
        $products = $request->input('items');
        $amounts = $request->input('amount');
        foreach ($products as $key => $product_id) :
            $order_id = Order::latest()->first()->id;
            $product_price = Product::find($product_id)->price;
            $product_stock = Product::find($product_id)->stock;
            OrderProduct::create(
                [
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'amount' => $amounts[$key],
                    'price' => $product_price
                ]
            );
            Product::find($product_id)->update(
                [
                    'stock' => $product_stock - $amounts[$key]
                ]
            );
        endforeach;
        Cart::where('user_id', $user_id)->delete();
        return redirect()->route('user.home');
    }
}

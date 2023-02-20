<?php

namespace App\Http\Controllers\Top;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where('user_id', 'id');
        return view('user.order',compact('orders'));
    }
}

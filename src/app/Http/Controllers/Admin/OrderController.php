<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where('user_id', 'id');
        return view('admin.index',compact('orders'));
    }
}

<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::id();
        $user = Auth::user()->name;
        $orders = Order::where('user_id', $user_id)->get();
        return view('user.account', compact('orders','user'));
    }
}

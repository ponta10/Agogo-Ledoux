<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index () 
    {
        $today = Carbon::now()->format('Y-m-d');
        $yesterday = Carbon::yesterday()->format('Y-m-d');;
        $month = Carbon::now()->format('Y-m');
        $profit_today = Order::where('created_at','LIKE',$today . '%')->sum("bill_amount");
        $count_today = Order::where('created_at','LIKE',$today . '%')->count("bill_amount");
        $profit_yesterday = Order::where('created_at','LIKE',$yesterday . '%')->sum("bill_amount");
        $count_yesterday = Order::where('created_at','LIKE',$yesterday . '%')->count("bill_amount");
        $profit_month = Order::where('created_at','LIKE',$month . '%')->sum("bill_amount");
        $count_month = Order::where('created_at','LIKE',$month . '%')->count("bill_amount");
        $user_count = User::count('id');
        $no_stock_product = Product::where('stock',0)->count('id');
        return view('admin/index', compact('profit_today','profit_yesterday','profit_month','count_today','count_yesterday','count_month','user_count','no_stock_product'));
    }
    public function product () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('admin/product', compact('hello', 'hello_array'));
    }
    public function userList () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('admin/userList', compact('hello', 'hello_array'));
    }
    public function setting () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('admin/setting', compact('hello', 'hello_array'));
    }
}

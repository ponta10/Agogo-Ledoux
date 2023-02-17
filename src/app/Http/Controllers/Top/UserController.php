<?php

namespace App\Http\Controllers\Top;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $sevendays = Carbon::today()->subHour(1);
        $newProducts = Product::where('created_at', '>=', $sevendays)->get();
        return view('user/home',compact('products','newProducts'));
    }
}

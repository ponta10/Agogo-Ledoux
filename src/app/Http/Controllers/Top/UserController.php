<?php

namespace App\Http\Controllers\Top;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    public function index()
    {   

        $tags = Tag::all();
        $products = Product::all();
        $sevendays = Carbon::today()->subHour(1);
        $newProducts = Product::where('created_at', '>=', $sevendays)->get();
        return view('user/home',compact('tags','products','newProducts'));
    }
}

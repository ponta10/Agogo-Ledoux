<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function index(){
        $user_id = Auth::id();
        $products = User::find($user_id)->products;
        return view('user.history',compact('products'));
    }
}

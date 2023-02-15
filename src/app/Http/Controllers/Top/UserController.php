<?php

namespace App\Http\Controllers\Top;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user/home');
    }
}

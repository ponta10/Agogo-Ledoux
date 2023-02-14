<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {   
        $products = Product::all();
        return view('admin.product',compact('products'));
    }

    public function store(Request $request)
    {   
        $data = $request->all();
        Product::create([
            'name' => $data['product_name'],
            'price' => $data['product_price'],
            'stock' => $data['product_stock'],
            'image' => "test",
            "desc" => $data['product_desc'],
        ]);
        return redirect()->route('admin.product');
    }
}

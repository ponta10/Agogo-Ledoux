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
        $delete_products = Product::onlyTrashed()->get();
        return view('admin.product.index',compact('products','delete_products'));
    }

    public function store(Request $request)
    {   
        $data = $request->all();
        $img = $request->file('image');
        $folder_path = $img->store('image','public');
        $path = str_replace('image', '', $folder_path);
        Product::create([
            'name' => $data['product_name'],
            'price' => $data['product_price'],
            'stock' => $data['product_stock'],
            'image' => $path,
            "desc" => $data['product_desc'],
        ]);
        return redirect()->route('admin.product');
    }

    public function destroy($id)
    {   
        Product::find($id)->delete();
        return redirect()->route('admin.product');
    }

    public function restore($id)
    {   
        Product::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.product');
    }

    public function show($id)
    {   
        $product = Product::find($id);
        return view('admin.product.show',compact('product'));
    }

    public function edit(Request $request,$id)
    {   
        $update = [
            'name' => $request->title,
            'price' => $request->detail,
            'stock' => $request->stock,
            'image' => "test",
            'desc' => $request->desc,
        ];
        Product::find($id)->update($update);
        return redirect()->route('admin.product');
    }
}

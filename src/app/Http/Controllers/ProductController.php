<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function index()
    {   
        $products = Product::paginate(10);
        $delete_products = Product::onlyTrashed()->paginate(10);
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

    public function delete($id)
    {   
        Product::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.product');
    }

    public function show($id)
    {   
        $product = Product::find($id);
        return view('admin.product.show',compact('product'));
    }

    public function edit(Request $request,$id)
    {   
        $img = $request->file('image');
        $path = Product::find($id)->image;
        if (isset($img)) {
        Storage::disk('public')->delete($path);
        $folder_path = $img->store('image','public');
        $path = str_replace('image', '', $folder_path);
        Product::find($id)->update([ 'image' => $path]);
        }
        $data = $request->all();
        $update = [
            'name' => $data["product_name"],
            'price' => $data["product_price"],
            'stock' => $data["product_stock"],
            'desc' => $data["product_desc"],
        ];
        Product::find($id)->update($update);
        return redirect()->route('admin.product');
    }

    public function search(Request $request)
    {   
        $products = Product::where('name','like','%'.$request->input('search').'%')->get();
        $delete_products = Product::onlyTrashed()->where('name','like','%'.$request->input('search').'%')->get();
        return view('admin.product.index',compact('products','delete_products'));
    }

    public function sort(Request $request)
    {   
        $products = Product::orderby($request->input("sort"),'desc')->get();
        $delete_products = Product::onlyTrashed()->orderby($request->input("sort"),'desc')->get();
        return view('admin.product.index',compact('products','delete_products'));
    }
}

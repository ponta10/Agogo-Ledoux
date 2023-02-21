<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tag;


class Tagcontroller extends Controller
{
    public function index()
    {   
        $tags = Tag::all();
        return view('admin.tag',compact('tags'));
    }
    public function destroy($id)
    {   
        Tag::find($id)->delete();
        return redirect()->route('admin.tag');
    }
    public function store(Request $request)
    {   
        $data = $request->all();//全部持ってくるメソッド
        Tag::create([
            'name' => $data['tag_name'],
        ]);
        return redirect()->route('admin.tag');
    }
}

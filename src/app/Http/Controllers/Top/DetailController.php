<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\View;
use App\Product;
use App\Comment;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class DetailController extends Controller
{
    //
    public function show($id)
    {
        $user_id = Auth::id();
        $already_reviewed = View::where('user_id',$user_id)->where('product_id',$id)->count('id');
        if(!$already_reviewed):
        View::create([
            'user_id' => $user_id,
            'product_id' => $id,
        ]);
        endif;
        $product = Product::find($id);
        $comments = Comment::where('product_id',$id)
        ->join('products', 'comments.product_id', '=', 'products.id')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.id','users.name as name', 'text','star')->get();
        $empty_comment = $comments->isEmpty();
        return view('user.detail', compact('product','comments','empty_comment'));
    }

    public function review(Request $request)
    {
        $user_id = Auth::id();
        Comment::create(
            [
                'user_id' => $user_id,
                'product_id' => $request->input('product_id'),
                'text' => $request->input('text'),
                'star' => $request->input('star'),
            ]
        );
        return redirect()->route('user.detail.show',['id' => $request->input('product_id')]);
    }
}

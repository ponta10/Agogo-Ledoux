@extends('layouts.user.subLayout')

@section('title', 'detail')

@section('content')
<div class="detail-container">
    <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
    <div class="detail">
        <h2>{{$product->name}}</h2>
        <div class="number">
            <h2>¥{{$product->price}}</h2>
            <div><span class="plus">+</span><input class="amount" type="number" value="1"><span class="minus">-</span></div>
        </div>
        <div class="btn-container">
            <button class="btn cart-btn"><a href="{{ route('user.cart') }}">カートに入れる</a></button>
            <button class="btn buy-btn">すぐ購入する</button>
        </div>
        <h3>詳細</h3>
        <p>{{$product->desc}}</p>
    </div>
</div>
<div class="review">
    @foreach($comments as $comment)
    <div class="comment">
        <p>{{$comment->name}}</p>
        <p>{{$comment->text}}</p>
        @for ($i = 0; $i < $comment->star; $i++)
            <img class="comment-star" src="{{ asset('img/star2.png')}}">
            @endfor
    </div>
    @endforeach
    <form action="{{ route('user.detail.review') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="text" name="text">
        <input type="number" name="star" min=1 max=5>
        <input class="submit" type="submit" value="コメントする">
    </form>
    @if($empty_comment)
    <p class="review-none">コメントはありません</p>
    @endif
</div>
@endsection
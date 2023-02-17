@extends('layouts.user.subLayout')

@section('title', 'detail')

@section('content')
<form class="detail-container">
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
</form>
@endsection
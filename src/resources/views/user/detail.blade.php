@extends('layouts.user.subLayout')

@section('title', 'detail')

@section('content')
<form class="detail-container">
    <img src="{{ asset('storage/image/mikan.jpeg') }}" alt="">
    <div class="detail">
        <h2>ミカン</h2>
        <div class="number">
            <h2>¥120</h2>
            <div><span class="plus">+</span><input class="amount" type="number" value="3"><span class="minus">-</span></div>
        </div>
        <div class="btn-container">
            <button class="btn cart-btn">カートに入れる</button>
            <button class="btn buy-btn">すぐ購入する</button>
        </div>
        <h3>詳細</h3>
        <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
    </div>
</form>
@endsection
@extends('layouts.user.subLayout')

@section('title', 'account')

@section('content')
<div class="account-container">
    <h2>アカウント情報</h2>
    <p>{{$user}}さん</p>
    @foreach($orders as $order)
    <div class="account-container_box">
        <div class="order-history">
            <div class="total">
                <p>合計</p>
                <h3>{{$order->bill_amount}}円</h3>
            </div>
            @foreach($order->products as $product)
            <div class="product">
                <p>{{$product->name}}</p>
                <p>{{$product->price}}円</p>
                <p>{{$product->pivot->amount}}個</p>
                <h4>合計{{$product->price * $product->pivot->amount}}円</h4>
                <button><a href="{{ route('user.detail.show',['id' => $product->id ]) }}">See detail</a></button>
            </div>
            <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
@extends('layouts.user.subLayout')

@section('title', 'history')

@section('content')
<h2>閲覧履歴</h2>
    @foreach($products as $product)
        <p>{{$product->name}}</p>
        <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
        <button class="detail-btn"><a href="{{ route('user.detail.show',['id' => $product->id ]) }}">See detail</a></button>
    @endforeach
@endsection
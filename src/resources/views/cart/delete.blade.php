@extends('layouts.user.subLayout')

@section('title', 'cart_delete')

@section('content')
<form action="" method="post">
  @csrf
  <ul class="main_cart_left_products">
    <li class="main_cart_left_product">
      <img src="{{ asset('storage/image/' . $item->image) }}" alt="写真">
      <div class="main_cart_left_product_info">
        <h2>{{$item['name']}}</h2>
        @if($item['stock']-$item['amount'] > 2)
        <p class="stock stock_enough">在庫あり</p>
        @else
        <p class="stock stock_less">残り{{$item['stock']}}点</p>
        @endif
      </div>
      <p class="">¥{{$item['price']}}</p>
      <button>削除</button>
    </li>
  </ul>
</form>

<style>
  ul{
    width: 60%;
    margin: auto;
  }
  button{
    margin-left: 50px;
    padding: 3px;
    border: solid 1px #000;
    border-radius: 5px;
    background-color: #eee;
  }
</style>

@endsection
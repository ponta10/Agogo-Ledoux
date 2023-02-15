@extends('layouts.user.subLayout')

@section('title', 'cart')

@section('content')
<div class="main_cart">
  <div class="main_cart_left">
    <div class="main_cart_left_top">
      <h1>ショッピングカート</h1>
      <p class="delete">全ての商品の選択解除</p>
      <p class="price">価格</p>
    </div>
    <div class="main_cart_left_products">
      <div class="main_cart_left_product">商品</div>
      <div class="main_cart_left_product">商品</div>
      <div class="main_cart_left_product">商品</div>
      <div class="main_cart_left_product">商品</div>
      <div class="main_cart_left_product">商品</div>
    </div>
    <div class="main_cart_left_price">
      <p>
        小計（2個の商品）税込〇〇円
      </p>
    </div>
  </div>
  <div class="main_cart_right">
    <div class="main_cart_right_price">
      小計（2個の商品）<br>税込〇〇円
      <form action="">
        @csrf
        <input type="hidden" value="おかね" name="price">
        <button>レジへ進む</button>
      </form>
    </div>
    <div class="main_cart_right_recommend">
      <div class="recommendations">
        おすすめ！！！！
      </div>
      <div class="recommendations">
        おすすめ！！！！
      </div>
      <div class="recommendations">
        おすすめ！！！！
      </div>
      <div class="recommendations">
        おすすめ！！！！
      </div>
      <div class="recommendations">
        おすすめ！！！！
      </div>
    </div>
  </div>
</div>
@endsection
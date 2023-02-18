@extends('layouts.user.subLayout')

@section('title', 'cart')

@section('content')
<form class="main_cart" action="{{ route('user.cart.buy') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="main_cart_left">
    <div class="main_cart_left_top">
      <h1>ショッピングカート</h1>
      <p class="delete">全ての商品の選択解除</p>
      <p class="price">価格</p>
    </div>
    <ul class="main_cart_left_products">
      @foreach($items as $key => $item)
      <input type="hidden" name="items[{{$key}}]" value="{{$item->id}}">
      <li class="main_cart_left_product">
        <img src="{{ asset('storage/image/' . $item->image) }}" alt="写真">
        <div class="main_cart_lef t_product_info">
          <h2>{{$item['name']}}</h2>
          @if($item['stock']-$item['amount'] > 2)
          <p class="stock stock_enough">在庫あり</p>
          @else
          <p class="stock stock_less">残り{{$item['stock']}}点</p>
          @endif
          <div class="amount">
            <select name="amount[{{$key}}]" id="" price="{{$item['price']}}">
              @for($i=0;$i<$item['stock'];$i++) @if($i+1===$item['amount']) <option selected value="{{$i+1}}">
                @else
                <option value="{{$i + 1}}">
                  @endif
                  数量：{{$i + 1}}
                </option>
                @endfor
            </select>
            <a>削除</a>
            <a>類似商品をもっとみる</a>
          </div>
        </div>
        <p class="price">¥{{$item['price']}}</p>
      </li>
      @endforeach
    </ul>
    <div class="main_cart_left_price">
      <p>
        小計（{{count($items)}}個の商品））税込
        <span class="j_price"></span>
        円
      </p>
    </div>
  </div>
  <div class="main_cart_right">
    <div class="main_cart_right_price">
      小計（{{count($items)}}個の商品）<br>税込<span class="j_price"></span>円
        <input type="hidden" value=0 name="order" id="hidden_price">
        <button type="submit">レジへ進む</button>
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
</form>

<script>
  const priceAreas = document.querySelectorAll('.j_price');
  const selects = document.querySelectorAll('select');
  const hiddenPrice = document.getElementById('hidden_price');
  let price = 0;
  selects.forEach(select => {
    price += Number(select.getAttribute('price')) * Number(select.value);
  })
  priceAreas.forEach(priceArea => {
    priceArea.innerHTML = price;
    hiddenPrice.value = price;
  })

  selects.forEach(select => {
    select.addEventListener('change', function() {
      price = 0;
      selects.forEach(select => {
        price += Number(select.getAttribute('price')) * Number(select.value);
      })
      priceAreas.forEach(priceArea => {
        priceArea.innerHTML = price;
        hiddenPrice.value = price;
      })
    })
  })
</script>
@endsection
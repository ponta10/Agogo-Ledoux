@extends('layouts.mainLayout')
@section('pageLayout')
<div class="table-container">
    <div class="product_search">
        <input type="text">
        <button>検索</button>
        <button>新規追加</button>
    </div>
    <div class="product-container">
        <table class="product_table">
            <tr>
                <th>ID</th>
                <th>画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫</th>
                <th>タグ</th>
                <th>公開日</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img class="product_image" src="{{ asset('image/' . $product->image) }}" /></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>あああ</td>
                <td>{{$product->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
@section('product', 'selected')
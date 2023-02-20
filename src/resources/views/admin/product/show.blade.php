@extends('layouts.admin.mainLayout')
@section('pageLayout')
<form class="show-container" action="{{ route('admin.product.edit',['id' => $product->id ]) }}" method="post" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
    <h2>商品情報更新</h2>
    <div class="textField">
        <p>商品名</p>
        <input type="text" name="product_name" value="{{ $product->name }}">
    </div>
    <div class="textField">
        <p>価格</p>
        <input type="number" name="product_price" value="{{ $product->price }}">
    </div>
    <div class="textField">
        <p>在庫</p>
        <input type="number" name="product_stock" value="{{$product->stock}}">
    </div>
    <div class="textField">
        <p>詳細</p>
        <textarea name="product_desc" value="{{$product->desc}}">{{$product->desc}}</textarea>
    </div>
    <p>画像</p>
    <div class="imageField">
        <input type="file" name="image" class="file" value="{{$product->image}}">
        <img id="preview" class="img-thumbnail h-25 w-25 mb-3" width="600px" height="450px" src="/storage/image/{{ $product->image }}">
    </div>
    {{-- ここからタグ一覧
    ・その商品ごとのタグを取得する
    　→タグをforeachで回す
    　→その商品ごとの更新一覧で表示する
    　→チェック機能
    　→チェックで表示されるようにする
    
        --}}
    <div class="textField">
        <p>タグ</p>
        <input type="text" name="product_stock" value="">
    </div>
    <div class="btn-container">
        <button class="btn" type="submit">更新</button>
        <button class="btn clear-btn" type="button"><a href="{{ route('admin.product') }}">キャンセル</a></button>
    </div>
</form>
@endsection
@section('product', 'selected')
@extends('layouts.admin.mainLayout')
@section('pageLayout')
<div class="table-container">
    <form class="product_search" action="{{ route('admin.product.search') }}" method="get" enctype="multipart/form-data" >
        <input type="text" name="search" value="{{ request()->input('search') }}">
        <button class="btn" type="submit">検索</button>
        <button class="btn clear-btn" type="button"><a href="{{ route('admin.product') }}">クリア</a></button>
        <button class="btn add-btn" type="button">新規追加</button>
    </form>
    <div class="selection">
        <button class="btn release-btn">公開している商品</button>
        <button class="btn trash-btn notSelected">ゴミ箱</button>
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
                <th>更新</th>
                <th>削除</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img class="product_image" src="{{ asset('storage/image/' . $product->image) }}" /></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>あああ</td>
                <td>{{$product->created_at}}</td>
                <td><a href="{{ route('admin.product.show',['id' => $product->id ]) }}"><img src="/storage/image/edit.png" alt="" class="trash_can"></a></td>
                <td><a href="{{ route('admin.product.destroy',['id' => $product->id ]) }}"><img src="/storage/image/trash_can.png" alt="" class="trash_can"></a></td>
            </tr>
            @endforeach
        </table>
        <table class="product_table product_table_trash none">
            <tr>
                <th>ID</th>
                <th>画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫</th>
                <th>タグ</th>
                <th>削除日</th>
                <th>復元</th>
                <th>完全削除</th>
            </tr>
            @foreach($delete_products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img class="product_image" src="{{ asset('storage/image/' . $product->image) }}" /></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>あああ</td>
                <td>{{$product->deleted_at}}</td>
                <td><a href="{{ route('admin.product.restore',['id' => $product->id ]) }}"><img src="/storage/image/restore.png" alt="" class="trash_can"></a></td>
                <td><a href="{{ route('admin.product.delete',['id' => $product->id ]) }}"><img src="/storage/image/complete_delete.webp" alt="" class="trash_can"></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="overlay">
    <form class="modal" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>商品追加</h3>
        <div class="textField">
            <p>商品名</p>
            <input class="modal_input" type="text" name="product_name" placeholder="りんご">
        </div>
        <div class="textField">
            <p>画像</p>
            <input type="file" name="image" class="file">
            <img id="preview" class="img-thumbnail h-25 w-25 mb-3" width="600px" height="450px" src="/storage/image/図1.png">
        </div>
        <div class="textField">
            <p>価格</p>
            <input class="modal_input" type="number" name="product_price" placeholder="1200">
        </div>
        <div class="textField">
            <p>在庫</p>
            <input class="modal_input" type="number" name="product_stock" placeholder="100">
        </div>
        <div class="textField">
            <p>詳細</p>
            <textarea class="modal_input" type="text" name="product_desc" placeholder="甘酸っぱいりんごです"></textarea>
        </div>
        <div class="btn-container">
            <button class="btn" type="submit">商品追加</button>
            <button class="btn" type="button">キャンセル</button>
        </div>
    </form>
</div>
@endsection
@section('product', 'selected')
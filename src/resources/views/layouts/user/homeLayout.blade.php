<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/user/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Document</title>
</head>

<body>
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <a href="" class="brand">Agogo & Ledoux
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <ul class="nav__wrapper">
                <li class="nav__item"><a href="/user/cart" class=""><i class="fas fa-shopping-cart"></i></a></li>
                <li class="nav__item"><a href="#">Home</a></li>
                <li class="nav__item"><a href="{{ route('user.account') }}">Account</a></li>
                <li class="nav__item"><a href="{{ route('user.history') }}">history</a></li>
                <li class="nav__item"><a href="/user/contact">Contact</a></li>
                <li class="nav__item"><a href="/login">Sign In</a></li>
                <li class="nav__item"><a href="/register" class="btn btn--orange">Sign Up</a></li>
            </ul>
        </div>
    </header>
    <div class="hero">
        <form id="serchForm" action="ここにサイトURLだよね多分">
            <input id="searchBox" id="searchBox" name="searchBox" type="text"
                placeholder="Search Vegetables, fruits" />
            <input id="searchBtn" type="submit" value="Search" />
        </form>
    </div>
    <main class="container">
        <form action="{{ route('user.tag') }}" method="get" class="tag" enctype="multipart/form">
            <h1 class="tag-title">タグ検索</h1>
            <ul class="tag-list">
                @foreach ($tags as $tag)
                    <li class="tag-list_item">
                        <input class="tag-list_item_checkbox" type="checkbox" value="{{ $tag->id }}"
                            name="checks[{{ $tag->id }}]">
                        <label>
                            <span class="tag-list_item_text">{{ $tag->name }}</span>
                        </label>
                    </li>
                @endforeach
                <li class="tag-list_item_submit"><input type="submit"  value="検索">
                </li>
            </ul>
        </form>
        <div class="popular">
            <h1 class="popular-title">人気商品</h1>
            <ul class="popular-list">
                @foreach ($popular_products as $product)
                    <li class="popular-list_item">
                        <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
                        <span>{{ $product->name }}</span>
                        <span>¥{{ $product->price }}</span>
                        @if (in_array($product->id, $product_carts_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cart" value="{{ $product->id }}">
                                <button class="btn added" disabled type="submit">Add to cart</button>
                            </form>
                        @elseif(in_array($product->id, $sold_out_products_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button class="btn soldOut" disabled type="submit">SoldOut</button>
                            </form>
                        @else
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cart" value="{{ $product->id }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>
                        @endif
                        <button><a href="{{ route('user.detail.show', ['id' => $product->id]) }}">See
                                detail</a></button>
                    </li>
                @endforeach
            </ul>
            <h1 class="popular-title">新着商品</h1>
            <ul class="popular-list">
                @foreach ($newProducts as $product)
                    <li class="popular-list_item">
                        <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
                        <span>{{ $product->name }}</span>
                        <span>¥{{ $product->price }}</span>
                        @if (in_array($product->id, $product_carts_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button class="btn added" disabled type="submit">Add to cart</button>
                            </form>
                        @elseif(in_array($product->id, $sold_out_products_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button class="btn soldOut" disabled type="submit">SoldOut</button>
                            </form>
                        @else
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cart" value="{{ $product->id }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>
                        @endif
                        <button><a href="{{ route('user.detail.show', ['id' => $product->id]) }}">See
                                detail</a></button>
                    </li>
                @endforeach
            </ul>
            <h1 class="popular-title">商品一覧</h1>
            <ul class="popular-list">
                @foreach ($products as $product)
                    <li class="popular-list_item">
                        <img src="{{ asset('storage/image/' . $product->image) }}" alt="">
                        <span>{{ $product->name }}</span>
                        <span>¥{{ $product->price }}</span>
                        @if (in_array($product->id, $product_carts_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cart" value="{{ $product->id }}">
                                <button class="btn added" disabled type="submit">Add to cart</button>
                            </form>
                        @elseif(in_array($product->id, $sold_out_products_array))
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button class="btn soldOut" disabled type="submit">SoldOut</button>
                            </form>
                        @else
                            <form class="cart-form" action="{{ route('user.cart.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cart" value="{{ $product->id }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>
                        @endif
                        <button><a href="{{ route('user.detail.show', ['id' => $product->id]) }}">See
                                detail</a></button>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
    <footer>
        <h6>Copyright (C) 2020 Wizard. All Rights Reserved.</h6>
    </footer>
</body>

</html>

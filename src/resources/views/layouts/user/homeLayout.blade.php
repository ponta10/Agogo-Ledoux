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
            <ul class="nav__wrapper">
                <li class="nav__item"><a href="/user/cart" class=""><i class="fas fa-shopping-cart"></i></a></li>
                <li class="nav__item"><a href="#">Home</a></li>
                <li class="nav__item"><a href="/user/sale">Sale</a></li>
                <li class="nav__item"><a href="/user/contact">Contact</a></li>
                <li class="nav__item"><a href="/login">Sign In</a></li>
                <li class="nav__item"><a href="/register" class="btn btn--orange">Sign Up</a></li>
            </ul>
        </div>
    </header>
    <div class="hero">
        <form id="serchForm" action="ここにサイトURLだよね多分">
            <input id="searchBox" id="searchBox" name="searchBox" type="text" placeholder="Search Vegetables, fruits" />
            <input id="searchBtn" type="submit" value="Search" />
        </form>
    </div>
    <main class="container">
        <form action="" method="post" class="tag">
            <h1 class="tag-title">タグ検索</h1>
            <ul class="tag-list">
                <li class="tag-list_item">
                    <input class="tag-list_item_checkbox" type="checkbox" value="新鮮" name="fresh" id="">
                    <label>
                        <span class="tag-list_item_text">新鮮</span>
                    </label>
                </li>
                <li class="tag-list_item">
                    <input class="tag-list_item_checkbox" type="checkbox" value="新鮮" name="fresh" id="">
                    <label>
                        <span class="tag-list_item_text">新鮮</span>
                    </label>
                </li>
                <li class="tag-list_item">
                    <input class="tag-list_item_checkbox" type="checkbox" value="新鮮" name="fresh" id="">
                    <label>
                        <span class="tag-list_item_text">新鮮</span>
                    </label>
                </li>
                <li class="tag-list_item_submit" name="submit"><input type="submit" name="submit" value="検索">
                </li>
            </ul>
        </form>
        <div class="popular">
            <h1 class="popular-title">人気商品</h1>
            <ul class="popular-list">
                <li class="popular-list_item">
                    <img src="" alt="">
                    <span>ちんげんさい</span>
                    <span>￥1000</span>
                    <button><span>Add to cart</span></button>
                </li>
                <li class="popular-list_item">
                    <img src="" alt="">
                    <span>ちんげんさい</span>
                    <span>￥1000</span>
                    <button><span>Add to cart</span></button>
                </li>
                <li class="popular-list_item">
                    <img src="" alt="">
                    <span>ちんげんさい</span>
                    <span>￥1000</span>
                    <button><span>Add to cart</span></button>
                </li>
                <li class="popular-list_item">
                    <img src="" alt="">
                    <span>ちんげんさい</span>
                    <span>￥1000</span>
                    <button><span>Add to cart</span></button>
                </li>
            </ul>
        </div>
    </main>
    <footer>
        <h6>Copyright (C) 2020 Wizard. All Rights Reserved.</h6>
    </footer>
</body>

</html>
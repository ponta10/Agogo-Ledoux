<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>Agogo&Ledoux</h2>
    </header>
    <div class="main">
        <nav class="navigation">
            <ul class="navigation-list">
                <li class="navigation-list_item @yield('home')"><a href="{{ route('admin') }}" class="link">ホーム</a></li>
                <li class="navigation-list_item @yield('product')"><a href="{{ route('admin.product') }}" class="link">商品管理<a></li>
                <li class="navigation-list_item @yield('userList')"><a href="{{ route('admin.userList') }}" class="link">会員管理</a></li>
                <li class="navigation-list_item @yield('setting')"><a href="{{ route('admin.setting') }}" class="link">設定</a></li>
            </ul>
        </nav>
        <div class="container">
            @yield('pageLayout')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('/script/admin.js') }}"></script>
</body>

</html>
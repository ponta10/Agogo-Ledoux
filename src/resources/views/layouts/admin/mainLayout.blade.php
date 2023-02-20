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
                <li class="navigation-list_item @yield('tag')"><a href="{{ route('admin.tag') }}" class="link">タグ</a></li>
                <li class="navigation-list_item @yield('userList')"><a href="{{ route('admin.userList') }}" class="link">会員管理</a></li>
                <li class="navigation-list_item @yield('setting')"><a href="{{ route('admin.setting') }}" class="link">設定</a></li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
            </ul>

        </nav>
        <div class="container">
            @yield('pageLayout')
        </div>
    </div>
    
    <script src="{{ asset('/script/admin.js') }}"></script>
</body>

</html>
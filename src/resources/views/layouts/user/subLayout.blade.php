<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/style/cartpage/user.css') }}">
</head>
<body>
  <header class="header">
    <div class="logo">Agogo & Ledoux</div>
    <nav>
      <ul class="header_nav_lists">
        <li><a href="/user/home">Home</a></li>
        <li><a href="/user/cart">Sale</a></li>
        <li><a href="/user/account">Account</a></li>
        <li><a href="/user/contact">Contact</a></li>
      </ul>
    </nav>
    <div>カートへ</div>
    <div>ログイン系</div>
  </header>
  <main class="main">
    @yield('content')
  </main>
  <script src="{{ asset('/script/detail.js') }}"></script>
</body>
</html>
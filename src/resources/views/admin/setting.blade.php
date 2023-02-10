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
                <li class="navigation-list_item">ホーム</a></li>
                <li class="navigation-list_item"><a href="{{ route('admin.product') }}">商品管理<a></li>
                <li class="navigation-list_item"><a href="{{ route('admin.userList') }}">会員管理</a></li>
                <li class="navigation-list_item"><a href="{{ route('admin.setting') }}">設定</a></li>
            </ul>
        </nav>
        <div class="container">
            <p>setting</p>
        </div>
    </div>
</body>

</html>
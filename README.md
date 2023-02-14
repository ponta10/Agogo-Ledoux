## 事前企画概要
### 事前企画で作るもの
ショッピングサイト(ECサイト)

### 開発環境 
Laravel 6.x

### 起動方法
```
 $ cd docker
 $ docker compose build --no-cache
 $ docker compose up -d
```
ブラウザでhttp://localhost にアクセスし、「laravel」が表示されることを確認。

ブラウザでhttp://localhost/telescope でtelescopeを起動。

### DB接続設定
src/.envの下記のデータを書き換えてください。
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
```

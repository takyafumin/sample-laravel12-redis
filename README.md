# sample-laravel12-redis

Laravel12でredisを用いた構成を構築する

## 環境

- php
- composer
- node
- npm

## 使い方

### docker環境起動

srcディレクトリに入り、以下のコマンドを実行してください

```bash
./vendor/bin/sail up -d
```

## 初期構築(初回のみ)

docker環境起動後、以下のコマンドを実行してDBマイグレーションを行ってください

```bash
sail exec laravel.test php artisan migrate
```

テストデータをseederで投入してください

```bash
sail exec laravel.test php artisan db:seed
```

## TIPS

### DBクライアントツール

Docker環境にadminerが含まれています
- http://localhost:8080/

# portfolio

## 環境構築
**Dockerビルド**

1. リポジトリの設定
``` bash
git clone git@github.com:kozu-ike/portfolio.git
```
- HTTPS形式の場合
``` bash
git clone https://github.com/kozu-ike/portfolio.git
```

2. DockerDesktopアプリを立ち上げる
``` bash
docker-compose up -d --build
```

**Laravel環境構築**

3. `docker-compose exec php bash`

4. `composer install`

5. 「.env.example」ファイルを 「.env」ファイルに命名を変更。
    または、新しく.envファイルを作成
``` bash
cp .env.example .env
```
6. .env ファイル内の以下の値を適切に設定してください
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

- コマンドを実行してキャッシュをクリアし、設定が反映されるようにする。
``` bash
php artisan config:cache
```

7. アプリケーションキーの作成
``` bash
php artisan key:generate
```

## 使用技術(実行環境)
- PHP 8.2.28
- Laravel 8.83.29

## URL
- 開発環境：http://localhost/

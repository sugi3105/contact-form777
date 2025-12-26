
Laravelでお問い合わせフォームです。

使用技術
・Laravel
・PHP
・MySQL
・Docker

環境構築
git clone https://github.com/sugi3105
cd contact-form777
docker-compose up -d --build
docker-compose exec php bash
composer install
cp .env.example .env
php artisan Key:generate
php artisan migrate:fresh

アクセス　URL
・お問い合せフォーム
http://lacalhost/contact

・管理画面
http://localhost/admin# 



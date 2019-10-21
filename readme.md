# laravel_blog
 
Para rodar o projeto é necessario executar os seguintes comandos:

```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate ou php artisan migrate:refresh
php artisan db:seed
```
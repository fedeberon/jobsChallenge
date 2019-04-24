title Run Service

docker-compose exec app service supervisor start

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan config:cache

docker-compose exec app php artisan:migrate
up:
    docker-compose up -d
build:
    docker-compose build
install:
		docker-compose up -d --build
    docker-compose exec app composer install
		docker-compose exec app cp .env.example .env
		docker-compose exec app php artisan key:generate
		docker-compose exec app php artisan migrate:fresh --seed
stop:
    docker-compose stop
restart:
    docker-compose down
    docker-compose up -d
app:
    docker-compose exec app bash
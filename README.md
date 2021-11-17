# 構築手順

`````
$ docker-compose build
$ docker-compose up -d
`````


`````
$ docker-compose exec app bash
$ composer install
$ php artisan key generate
`````

# 各サービスを開く

アプリ：http://localhost/
minio：http://localhost:9000
mailcatcher：http://localhost:1080




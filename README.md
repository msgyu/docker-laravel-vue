# 構築手順

1. .env.exampleを.envに変更
環境変数を利用できるようにするために、.env.exampleを.envにファイル名を更新する。<br />

2. docker環境の構築

`````
$ docker-compose build
$ docker-compose up -d
`````

3. アプリの初期設定を完了する

`````
$ docker-compose exec app bash
$ composer install
$ php artisan key generate
`````

# 各サービスを開く

アプリ：http://localhost/ <br />
minio：http://localhost:9000 <br />
mailcatcher：http://localhost:1080 <br />




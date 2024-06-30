## Start docker

```
git clone
```

```
cp .env.example .env
```
## Заполнить переменные в .env файле
DB_CONNECTION=mysql <br>
DB_HOST=mysql <br>
DB_PORT=3306 <br>
DB_DATABASE= <br>
DB_USERNAME= <br>
DB_PASSWORD= <br>
API_KEY=

```
composer install
```

```
./vendor/bin/sail up -d
```

```
./vendor/bin/sail artisan key:generate
```

```
./vendor/bin/sail artisan migrate
```


## Adminer 

Доступен по localhost:8080


## Для запуска очереди

```
./vendor/bin/sail artisan queue:work
```

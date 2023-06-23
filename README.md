#### General Configurations of API in PHP

#####  Configuration .env file in project root with the informations bellow

```
driver    = 'mysql'
host      = db
database  = 'mydatabase'
username  = 'root'
password  = 'q1w2e3r4'
charset   = 'utf8'
collation = 'utf8_unicode_ci'
prefix    = ''
strict    = false
```

##### Up Containers with the command

```
docker-compose up -d
```

##### Acsesss container PHP

```
docker-compose exec php-fpm bash
```
##### With composer install the dependencies

```
composer install
```

##### EndPoints of Category

 ###### GET: Get all categories
```
http://localhost:8080/category
```
<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/a992ae77-f62b-4617-9256-ec6cd5b4bd21">
</br>
```
http://localhost:8080/category/1
```

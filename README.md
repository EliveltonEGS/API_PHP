#### General Configurations of API in PHP

#####  Create .env file in project root with the informations bellow

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

##### Access in navigator

```
http://localhost:8080/category
```
```
http://localhost:8080/category/1
```

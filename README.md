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

##### EndPoints of Categories

###### GET: Get all categories
```
http://localhost:8080/category
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/3644c9d0-354b-446a-9e24-5253895e65b5"/>

###### GET: Get category by Id
```
http://localhost:8080/category/1
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/851480f5-9ae1-4907-a885-e5b8f52e2192"/>

###### POST: New category
```
http://localhost:8080/category
```

Requisition Body
```
{
   "description": "Iphone"
}
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/2fb2bb74-745c-471b-8259-d3c5a6a78bc9"/>

###### PUT: Update category
```
http://localhost:8080/category/3
```

Requisition Body
```
{
   "description": "Xiaomi"
}
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/b79eff32-6077-4ac4-8f33-ea4faa262765"/>

##### EndPoints of Products

###### GET: Get all products
```
http://localhost:8080/product
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/dc9ab542-cf56-4946-b4de-5daeab162f2e"/>

###### GET: Get products by id

```
http://localhost:8080/product/1
```

<img src="https://github.com/EliveltonEGS/API_PHP/assets/58617663/3a2a204c-d7c8-4e6a-9758-a0130b355820"/>
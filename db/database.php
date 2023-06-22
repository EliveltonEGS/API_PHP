<?php

use Source\Infrastructure\Migrations\Main;
use Illuminate\Database\Capsule\Manager as Capsule;

//config eloquent
$capsule = new Capsule();
$parsed = parse_ini_file('../.env');

$config = [
    'driver'    => $parsed['driver'],
    'host'      => $parsed['host'],
    'database'  => $parsed['database'],
    'username'  => $parsed['username'],
    'password'  => $parsed['password'],
    'charset'   => $parsed['charset'],
    'collation' => $parsed['collation'],
    'prefix'    => $parsed['prefix'],
    'strict'    => $parsed['strict']
];

$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

(new Main());
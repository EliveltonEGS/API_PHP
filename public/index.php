<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../db/database.php';
require_once __DIR__ . '/../routes/routes.php';
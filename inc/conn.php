<?php

//khu vực sửa default
'default' => 'pgsql', // env('DB_CONNECTION', 'mysql'),

//khu vực sửa pgsql
'pgsql' => [
    'driver' => 'pgsql',
    //'url' => env('DATABASE_URL'),
    'host' => "ec2-34-225-103-117.compute-1.amazonaws.com",  //env('DB_HOST', '127.0.0.1'),
    'port' => 5432, //env('DB_PORT', '5432'),
    'database' => "dcg72tr1l83dd3",   //env('DB_DATABASE', 'forge'),
    'username' => "eophfavabkrorx",   // env('DB_USERNAME', 'forge'),
    'password' => "cada536917ba323da06136f1b0fd36d8eeae9fee194a8d611e249fd04c60fa78",   //env('DB_PASSWORD', ''),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'schema' => 'public',
    'sslmode' => 'prefer',
],


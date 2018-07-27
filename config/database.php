<?php
/**
 * Created by PhpStorm.
 * atta ul mohsin(attaulmohsin@gmail.com)
 * Date: 7/16/2018
 * Time: 4:36 PM
 */

return [
    'default' => env('DB_CONNECTION'),
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('TABLE_PREFIX'),
            'strict' => false,
        ],
        'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE'),
            //   'username' => env('DB_USERNAME'),
            //   'password' => env('DB_PASSWORD'),
            'options' => [
                'database' => 'admin' // sets the authentication database required by mongo 3
            ]
        ],
    ]
];
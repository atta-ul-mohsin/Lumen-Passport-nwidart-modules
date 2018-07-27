<?php
/**
 * Created by PhpStorm.
 * atta ul mohsin(attaulmohsin@gmail.com)
 * Date: 7/20/2018
 * Time: 3:49 PM
 */
return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\User::class
        ]
    ]
];
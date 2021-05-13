<?php
use App\Controllers\AppController;
use App\Controllers\UserController;

$routes = [
        'get' => [
            '/' => AppController::index(),
            '/dashboard' => AppController::dashboard(),
            '/account' => AppController::account()
        ],

        'post' => [
            '/register' => UserController::register()
        ]
    ];

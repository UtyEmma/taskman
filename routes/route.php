<?php
use App\Controllers\AppController;
use App\Controllers\UserController;

$routes = [
        'get' => [
            '/' => AppController::index(),
            '/dashboard' => AppController::dashboard()
        ],

        'post' => [
            '/register' => UserController::register()
        ]
    ];

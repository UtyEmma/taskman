<?php
use App\Controllers\AppController;
use App\Controllers\UserController;

$routes = [
        'get' => [
            '/' => [AppController::class, 'index'],
            '/dashboard' => [AppController::class ,'dashboard'],
            '/account' => [AppController::class, 'account']
        ],

        'post' => [
            '/register' => [UserController::class, 'register'],
            '/login' => [UserController::class, 'login']
        ]
    ];

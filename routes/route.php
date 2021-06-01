<?php
use App\Controllers\AppController;
use App\Controllers\UserController;

$routes = [
        'get' => [
            '/' => [AppController::class, 'index'],
            '/account' => [AppController::class, 'account'],
            '/dashboard' => [AppController::class ,'dashboard', 'user']
        ],

        'post' => [
            '/register' => [UserController::class, 'register'],
            '/login' => [UserController::class, 'login']
        ]
    ];


$middlewares = [
    'user' => ['dashboard']
];

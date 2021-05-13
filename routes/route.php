<?php
namespace Routes;

use App\Controllers\AppController;
use App\Controllers\UserController;

class Routes {
    static $get = [
        '/' => AppController::index(),
        '/dashboard' => AppController::dashboard()
    ];

    static $post = [
        '/register' => UserController::register()
    ];
}

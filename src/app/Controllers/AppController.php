<?php
namespace App\Controllers;

class AppController {

    static function index (){
        return 'src/views/index.html';
    }

    static function dashboard (){
        return 'src/views/dashboard.html';
    }

    static function account (){
        return 'src/views/account.html';
    }
}
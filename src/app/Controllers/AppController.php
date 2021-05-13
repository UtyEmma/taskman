<?php
namespace App\Controllers;

class AppController {

    static function index (){
        require('src/views/account.html');
    }

    static function dashboard (){
        require('src/views/dashboard.html');
    }
}
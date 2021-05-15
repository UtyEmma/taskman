<?php
namespace App\Controllers;

use Services\Response\Response;

class AppController {

    static function index (){
        return Response::view('index', [
            'title' => 'Kanu',
            'brand' => 'snap'
        ]);
    }

    static function dashboard (){
        return Response::view('dashboard', [
            'title' => 'Dashboard',
            'brand' => 'Taskman'
        ]);
    }

    static function account (){
        return Response::view('account', [
            'title' => 'Samuel',
            'brand' => 'Pages'
        ]);
    }
}
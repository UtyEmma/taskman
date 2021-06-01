<?php
namespace App\Controllers;
session_start();

use Services\Auth\Auth;
use Services\Response\Response;

class AppController {

    static function index (){
        return Response::view('index', [
            'title' => 'Kanu',
            'brand' => 'snap'
        ]);
    }

    static function dashboard (){
        $user = Auth::getUser();
        
        return Response::view('dashboard', [
            'title' => 'ajjaj',
            'brand' => 'Taskman',
            'email' => $user->email
        ]);
    }

    static function account (){
        return Response::view('account', [
            'title' => 'Samuel',
            'brand' => 'Pages'
        ]);
    }
}
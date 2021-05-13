<?php 
namespace Services\Requests;

use Exception;

class Client {

    static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    static function path(){
        return $_SERVER['REQUEST_URI'];
    }

    // static function 

}
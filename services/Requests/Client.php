<?php 
namespace Services\Requests;

class Client {

    public function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    static function path(){
        return $_SERVER['REQUEST_URI'];
    }

    static function url(){
        return $_SERVER[''];
    }

}
<?php 
namespace Services\Requests;

class Client {

    public function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    static function path(){
        return $_SERVER['REQUEST_URI'];
    }

    static function base_url(){
        $request = $_SERVER['REQUEST_URI'];
        $explode = explode('/', $request);
        return $explode[1];
    }

    static function url(){
        $request = $_SERVER['REQUEST_URI'];
        $explode = explode('/', $request);
        $one = [];
        foreach ($explode as $key => $value) {
            if ($value !== self::base_url()) {
                $one[] = $value;
            }
        }

        return implode('/', $one);
    }

}
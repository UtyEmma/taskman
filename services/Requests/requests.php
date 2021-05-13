<?php
namespace Services\Requests;

class Requests {

    public function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function path(){
        
    }

}
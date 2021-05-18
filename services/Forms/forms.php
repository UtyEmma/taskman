<?php
namespace Services\Forms;

class Forms{

    static function all(){
        $request = json_decode(json_encode($_REQUEST));
        return $request;
    }

    
    
}
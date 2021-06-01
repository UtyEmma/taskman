<?php
namespace Services\Sessions;
session_start();

class Session {

    static function create ($name, $data){
        $_SESSION[$name] = $data;
        return true;
    }

    static function get($name){
        isset($_SESSION[$name]) ? $res = $_SESSION[$name] : $res = false;
        return $res;
    }


}

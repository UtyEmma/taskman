<?php

namespace Services\Auth;

use App\Models\Database\Resources;
use Services\Sessions\Session;

class Auth{

  // decrypt the string
  public function decryptString($string, $salt)
  {
    return ;
  }
    static function user ($table, $data){

        $user_exists = Resources::where($table, $data);
        if(!$user_exists ){
            return false;
        }
        $user = base64_encode(json_encode($user_exists));
        Session::create('user', $user) ? $res = $user_exists : $res = false;
        return $res;
    }

    static function getUser(){
        return json_decode(base64_decode($_SESSION['user']));
    }

    // static function 

    static function logout(){
        unset($_SESSION['user']);
        return true;
    }

}
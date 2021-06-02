<?php
namespace Services\Auth;

use App\Models\Database\Resources;
use Services\Sessions\Session;

class Auth{

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
        if (!$user = Session::get('user')){
            return false;
        }
        return $user;
    }

    static function logout(){
        Session::destroy('user');
        return true;
    }

}
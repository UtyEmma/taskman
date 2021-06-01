<?php

namespace Services\Middleware;

use Services\Auth\Auth;
use Services\Response\Response;

class Middleware {

    static function check($value){
        call_user_func('self::'.$value);
    }

    static function user(){
        if (!Auth::getUser()) {
            return Response::redirect('account');
        };
    }

    

}
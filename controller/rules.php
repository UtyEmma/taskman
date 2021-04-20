<?php 

trait Rules {

    function empty ($value){
        if (empty($value) || $value === '' || $value = null) {
            return message('error','This field is required');
        }

        return message('success');
    }

    function email_address($value){
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
            return message('error', 'Email Address is invalid')
        }

        return message('success');
    }

    function password($value){
        $regEx = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';

        if (!preg_match($regEx, $value)){
            return message('error', 'Password is not strong enough')
        }

        return message('success');
    }

    function confirm_password($value, $password){
        if ($value !== $password) {
            return message('error', 'Your Passwords must be similar')
        }

        return message('success');
    }

    function errorMessage($status, $message = ''){
        if ($status) {
            return [
                'status' => true,
                'message' => $message
            ];
        }

        return [
            'status' => false,
            'message' => $message
        ]
    }
}
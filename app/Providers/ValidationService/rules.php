<?php 

trait Rules {

    function empty ($value){
        if (empty($value) || $value === '' || $value = null) {
            return $this->message('error','This field is required');
        }

        return $this->message('success');
    }

    function email_address($value){
        !filter_var($value, FILTER_VALIDATE_EMAIL)
            ? $message = $this->message('error', 'Email Address is invalid')
                :  $message = $this->message('success');

        return $message;
    }

    function password($value){
        $regEx = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';

        !preg_match($regEx, $value) 
            ? $message = $this->message('error', 'Password is not strong enough')
                : $message = $this->message('success');

        return $message;
    }

    function confirm_password($value, $password){
        $value !== $password
            ? $message = $this->message('error', 'Your Passwords must be similar')
                : $message = $this->message('success');

        return $message;
    }

    function message($status, $message = ''){
        
        $status 
            ? $response = [
                'status' => true,
                'message' => $message]
                : $response = [
                    'status' => false,
                    'message' => $message];
        
        return $response;

    }
}
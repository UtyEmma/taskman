<?php 

trait Rules {

    function empty ($value){
        if (empty($value) || $value === '' || $value = null) {
            return $this->message(false,'This field is required');
        }

        return $this->message(true);
    }

    function email_address($value){
        !filter_var($value, FILTER_VALIDATE_EMAIL)
            ? $message = $this->message(false, 'Email Address is invalid')
                :  $message = $this->message(true);

        return $message;
    }

    function password($value){
        $regEx = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';

        !preg_match($regEx, $value) 
            ? $message = $this->message(false, 'Password is not strong enough')
                : $message = $this->message(true);

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
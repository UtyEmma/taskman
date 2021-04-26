<?php

class Form {
    protected function getAction(){
        if (isset($_GET['action'])) {
            $value = $_GET['action'];
            
            return call_user_func('App::'.$value);
        }
    }

    public function purge($formValues){
        $password = $formValues->password;
        $status = [];
        $i = 0;
        
        foreach ($formValues as $key => $value) {
            $validated =  Validator::check($key, $value, $password);
            $validated = $status[$i];    
            $i++;
        }
    }
}
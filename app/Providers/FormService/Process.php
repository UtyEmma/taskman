<?php

trait Form{

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
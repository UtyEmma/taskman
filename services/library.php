<?php 
require './validator.php';

class Library{
    use Validator;

    public function __construct(){
        ///empty
    }
    
    public function processFormValues($formValues){
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
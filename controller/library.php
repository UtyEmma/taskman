<?php 
require './validator.php';

class Library{
    use Validator;

    public function __construct(){
        $this->getAction();
    }
 
    public proccessFormValues($formValues){
        $password = $formValues->password;

        $status[];
        $i;

        foreach ($formValues as $key => $value) {
            $validated =  Validator->check($key, $value, $password);
            $validated = $status[$i];    
            $i++;
        }

        if () {
            
        }



    }


}
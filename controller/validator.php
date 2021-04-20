<?php 
require './rules.php';

trait Validator {

    Use Rules;

    // Check for empty values, if empty return the result
    public check($key, $value, $password = ''){
        $status = true;

        if (!empty($value)) {
            $this->validateFurther($key, $value, $password);
        }

        return $status;
    }

    protected validateFurther($key, $value, $password){
        $status = true;

        call_user_func('Rules::'.$key, $value, $password);

    }

}
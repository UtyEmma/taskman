<?php 
require './rules.php';
require './messages.php';

trait Validator {

    Use Rules;
    
    /**
     * make
     *
     * @param  mixed $formValues
     * @return void
     */    

    public function make($formValues){
        $i = 0;
        $status = [];
        foreach ($formValues as $key => $value) {
            $validated =  $this->check($key, $value);
            $validated = $status[$i];    
            $i++;
        }

        return $status;
    }

    
    /**
     * check
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function check($key, $value){
        $status = true;

        if (!empty($value)) {
          $validate = $this->validateFurther($key, $value);
        }else{
            $validate = ['status' => false, 'message' = Messgae->empty($Key)];
        }

        return ['name' => $key, 'result' => $validate];

        return $status;
    }

    protected function validateFurther($key, $value){
        $status = true;
        return call_user_func('Rules::'.$key, $value);
    }

}
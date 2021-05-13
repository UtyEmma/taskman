<?php

class Form {

    protected function getAction(){
        try {
            if(!isset($_GET['action'])){
                throw new Exception("Form Action Is Not Specified!");
            }
            $value = $_GET['action'];
            return call_user_func('App::'.$value);

        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public function purge($formValues){
        $password = $formValues->password;
        $status = [];
        $i = 0;
        
        
    }
}
<?php 
require './connect.php';
require './validator.php';
require './library.php';

class Controller {

    public function __construct(){   
        Connection::dbConnection(); 
        $this->getAction();
        // parent::__construct();       
    }

    protected function getAction(){
        if (isset($_GET['action'])) {
            $value = $_GET['action'];
            
            return call_user_func('App::'.$value);
        }
    }

     

}

$obj = new Controller();
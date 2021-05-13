<?php 
namespace App\Controllers;

use App\Models\Database\Connect;

class Controller {

    var $connect;

    public function __construct(){   
        $this->connect = new Connect();

        $this->connect->dbConnection();       
    }

     

}

$obj = new Controller();
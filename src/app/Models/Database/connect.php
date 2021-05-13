<?php
namespace App\Models\Database;

use Exception;

class Connect {
    
    STATIC $db_connection;

    var $host = 'localhost';
    var $username = 'root';
    var $password = '';
    var $database_name = 'taskman';

    function dbConnection () {


        try {
            if(!self::$db_connection = mysqli_connect($this->host, $this->username, $this->password, $this->database_name)){
                throw new Exception();
            }
        } catch (\Throwable $th) {
           return print_r($th->getMessage());
        }

    } 

}
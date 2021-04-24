<?php

trait Connection {
    
    STATIC $db_connection;

    var $host = 'localhost';
    var $username = 'root';
    var $password = '';
    var $database_name = 'taskman';

    function dbConnection () {

        self::$db_connection = mysqli_connect($this->host, $this->username, $this->password, $this->database_name);

        if (!self::$db_connection) {
            return mysqli_error(self::$db_connection);
        }

        return self::$db_connection;

    } 

}
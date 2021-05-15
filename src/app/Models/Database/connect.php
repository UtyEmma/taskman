<?php
namespace App\Models\Database;

class Connect {
    
    STATIC $db_connection;

    static $host = 'localhost';
    static $username = 'root';
    static $password = '';
    static $database_name = 'taskman';

    static function dbConnection () {
    
        self::$db_connection = mysqli_connect(self::$host, self::$username, self::$password, self::$database_name);
        if (self::$db_connection) {
            return self::$db_connection;
        }else{
            die(mysqli_connect_error());
        }

    } 

}
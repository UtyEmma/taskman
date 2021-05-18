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
            return mysqli_connect_error();
        }

    }
    
    static function sqlHandler($query){
        if($results = mysqli_query(self::dbConnection(), $query)){
            if (mysqli_num_rows($results) > 0) {
                $result = mysqli_fetch_assoc($results);
            }else{
                $result = null;
            }
        }else{
            return mysqli_error(self::dbConnection());
        }

        return $result;
    }

}
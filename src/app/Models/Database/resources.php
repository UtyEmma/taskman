<?php
namespace App\Models\Database;
use App\Models\Database\Connect;

class Resources extends Connect{

    static function create($table, $values){
        $query = "INSERT INTO ".$table."(".self::columns($values, true).") VALUES(".self::values($values, false).")";    
        
        if (mysqli_query(Connect::dbConnection(), $query)) {
            return $values;
        }else{
            return mysqli_error(Connect::dbConnection());
        }

    }

    static function select($table, $values){
        $query = "SELECT ".self::values($values, true)." FROM ".$table;
        return self::sqlHandler($query);
    }

    static function all($table){
        $query = "SELECT * FROM ".$table;
        return self::sqlHandler($query);
    }

    static function where($table, $value){            
        $query = "SELECT * FROM ".$table." WHERE ".self::selectValues($value);
        $result = self::sqlHandler($query);
        if (empty($result)) {
            return false;
        }
        $array = [];
        foreach ($result as $key => $value) {
            if ($key !== 'password') {
                $array[$key] = $value; 
            }
        }
        return $array;
    }

    static private function selectValues($values){
        $array = [];
        foreach ($values as $key => $value) {
            $array[] = $key." = "."'".$value."'";
        }

        if(count($array) > 1) {
            $query = implode(' AND ', $array);   
        }else{
            $query = $array[0];
        }

        return $query;
    }

    static private function columns($array, $quote){
        $columnArray = [];
        foreach ($array as $key => $value) {
            $quote ? $columnArray[] = $key : $columnArray[] = "'".$key."'";     
        }
        $implode = implode(', ', $columnArray);
        return $implode;
    }

    static private function values($array, $quote){
        $valueArray = [];
        foreach ($array as $key => $value) {
            $quote ? $valueArray[] = $value : $valueArray[] = "'".$value."'";     
        }
        $implode = implode(', ', $valueArray);
        return $implode;
    }

}
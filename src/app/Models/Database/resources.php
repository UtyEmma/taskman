<?php
namespace App\Models\Database;
use App\Models\Database\Connect;

class Resources extends Connect{

    static function create($table, $values){
        $connection = Connect::dbConnection();

        $query = "INSERT INTO ".$table."(".self::columns($values, true).") VALUES(".self::values($values, false).")";    
        
        if (mysqli_query($connection, $query)) {
            return $values;
        }else{
            return mysqli_error($connection);
        }

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
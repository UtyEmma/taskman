<?php
require './Database/Connect';
// require '../Controllers/Co';

trait Users {
    use Connect;

    function register(){
        $this->processFormValues($_POST);
    }

    function login(){
        $query = 'CREATE TABLE Persons (
            PersonID int,
            LastName varchar(255),
            FirstName varchar(255),
            Address varchar(255),
            City varchar(255)
        )';

        if(!mysqli_query(self::$db_connection, $query)){
            echo json_encode ([
                'status' => false,
                'message' => mysqli_error($this->db_connection)
            ]);
        }

        echo json_encode([
            'status' => true,
            'message' => 'Table was created successfully!'
        ]);
    }

}
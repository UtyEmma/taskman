<?php 
require './connect.php';
require './validator.php';
require './library.php';

class App extends Library{

    use Connection;

    public function __construct(){   
        $this->dbConnection(); 
        $this->getAction();       
    }

    protected function getAction(){
        if (isset($_GET['action'])) {
            $value = $_GET['action'];
            
            return call_user_func('App::'.$value);
        }
    }

    function register(){
        $this->proccessFormValues($_POST);

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

$obj = new App();
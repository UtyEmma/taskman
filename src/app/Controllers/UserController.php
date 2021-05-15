<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Database\Connect;
use App\Models\Database\Resources;
use Services\Forms\Forms;

class UserController extends Controller {

    static $conn;

    public function __construct(){
        self::$conn = Connect::$db_connection;
    }

    static function register(){
        $request = Forms::all();
        $data = [];
        if ($request) {
            $password = hash('SHA256', $request->password);
            $data = [
                'email' => $request->email,
                'password' => $password
            ];   
        
            $create_user = Resources::create('users', $data);
            
            echo json_encode($create_user);
        }
        
    }

    static function login(){
        $request = Forms::all();
        return Resources::create('users', $request);
    }
}


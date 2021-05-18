<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Database\Connect;
use App\Models\Database\Resources;
use Services\Forms\Forms;
use Services\Response\Response;

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
            $create_user = Resources::create('users', [
                'email' => $request->email,
                'password' => $password
            ]);
            return Response::json($create_user);
        }
        
    }

    static function login(){
        $request = Forms::all();
        $password = hash('SHA256', $request->password);
        $getUsers = Resources::where('users', [
            'email' => $request->email,
            'password' => $password
            ]);       
                 
        if (!$getUsers) {
            return Response::json([
                'status' => false,
                'message' => "Incorrect Username or Password"
                ]);
        }

        return Response::json($getUsers);
    }
}


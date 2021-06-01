<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Database\Connect;
use App\Models\Database\Resources;
use Services\Auth\Auth;
use Services\Forms\Forms;
use Services\Response\Response;
use Services\Session\Session;

class UserController extends Controller {

    static function register(){
        $request = Forms::all();
        if ($request) {
            $password = hash('SHA256', $request->password);  
            $create_user = Resources::create('users', [
                'email' => $request->email,
                'password' => $password
            ]);
            
            return Response::json([
                'status' => true,
                'data' => $create_user,
                'message' => "Registration Successful"
            ]);
        }
        
    }

    static function login(){
        $request = Forms::all();
        $password = hash('SHA256', $request->password);
        
        $getUsers = Auth::user('users', [
            'email' => $request->email,
            'password' => $password
            ]);

        if (!$getUsers) {
            return Response::json([
                'status' => false,
                'message' => "Incorrect Username or Password"
                ]);
        }

        return Response::json([
            'status' => true
        ]);
    }
}


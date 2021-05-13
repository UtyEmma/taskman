<?php
namespace Services\Requests;

use Exception;
use Services\Requests\Client;

require './routes/route.php';

class Requests extends Client{

    var $method;
    var $path;

    function __construct(){
        $this->method = new Client();
        $this->path = new Client();
        // $this->make();
    }

    // private function make(){   
    //     switch (strtolower($this->method())) {
    //         case 'get':
    //             // $this->get();
    //             break;
    //         case 'post':
    //             // $this->post();
    //             break;
    //         default:
    //             throw new Exception("Method does not exist", 500);                
    //             break;
    //     }
    // }

    // private function get(){
    //     foreach ($this->routes as $key => $value) {
    //         if ($key === $this->url) {
                
    //         }
    //     }
    // }

    // private function post(){
    //     foreach ($this->getRoutes as $key => $value) {
    //         if ($key === $this->url) {
                
    //         }
    //     }
    // }

}
<?php
namespace Services\Requests;

use Exception;
use Services\Requests\Client;
use Services\Routes\Routes;

class Requests extends Client{

    var $routes;

    function __construct(){
        $routes = new Routes();
        $this->routes = $routes->make();
        $this->make();
    }


    private function make(){   
        switch (strtolower($this->method())) {
            case 'get':
                $this->get($this->routes['get']);
                break;
            case 'post':
                $this->post($this->routes['post']);
                break;
            default:
                print_r("Invalid Request Method");
                break;
        }
    }

    private function get($routes){
        try {
            foreach ($routes as $key => $value){
                if ($key === $this->url()) {
                    return require $value;
                }
            }
            throw new Exception('Route"'.$this->url().'" does not exist');
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    private function post($routes){
        foreach ($routes as $key => $value) {
            if ($key === $this->url()){
                return $value;
            }
        }
        return print_r('Route"'.$this->url().'" does not exist');
    }

}
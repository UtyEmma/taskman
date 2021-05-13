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
                $this->post();
                break;
            default:
                print_r("Invalid Request Method");
                break;
        }
    }

    private function get($routes){
        try {
            foreach ($routes as $key => $value) {
                if ($key === $this->url()) {
                    return require $value;
                }
            }
            throw new Exception('Route"'.$this->url().'" does not exist');
        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
    }

    private function post(){
        foreach ($this->getRoutes as $key => $value) {
            if ($key === $this->url()) {
                
            }
        }
    }

}
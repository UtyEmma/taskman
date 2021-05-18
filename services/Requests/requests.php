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
        $i =0;
        foreach ($routes as $key => $value){
            if ($key === $this->url()) {
                return $this->loadRouteFunction($value);
            }
            $i++;
        }
    }

    private function loadRouteFunction($func){
        return call_user_func($func[0].'::'.$func[1]);
    }

    private function post($routes){
        foreach ($routes as $key => $value) {
            if ($key === $this->url()){
                return $this->loadRouteFunction($value);
            }
        }
        return print_r('Route"'.$this->url().'" does not exist');
    }

}
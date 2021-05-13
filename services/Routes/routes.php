<?php
namespace Services\Routes;

use App\Controllers\AppController;

class Routes { 

    var $route;

    public function __construct()
    {
        // $this->route = $route;
    }    

    public function make($route){
        print_r($route);
    }
}
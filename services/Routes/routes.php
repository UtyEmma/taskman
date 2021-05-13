<?php
namespace Services\Routes;

require 'routes/route.php';

global $new;
$new = $routes;

class Routes { 

    var $route;

    public function __construct()
    {
        $this->route = $GLOBALS['new'];
    }    

    public function make(){
        return $this->route;
    }
}
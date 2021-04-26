<?php 

class Routes { 

    //To redirect and render the route in the browser url

    /**
    *   1. Get the file name and the app name
    *   
    */ 

    private $baseUrl = $_SERVER['PHP_SELF'];
    private $requestURI = $_SERVER['REQUEST_URI'];
    private $fileName = basename($_SERVER['PHP_SELF']);

    public function __construct{
        
    }

    function validURL {
        $this->baseUrl === 
    }
    
}
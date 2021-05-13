<?php
namespace Services\Requests;

// include 'routes/route.php';
use Services\Requests\Client;

class Requests extends Client{

    var $method;
    var $path;

    function __construct(){
        $this->method = new Client();
        $this->path = new Client();
        $this->make();
    }

    private function make(){   
        switch (strtolower($this->method())) {
            case 'get':
                $this->get();
                break;
            case 'post':
                $this->post();
                break;
            default:
                # code...
                break;
        }
    }

    private function get(){
        foreach ($this->getRoutes as $key => $value) {
            if ($key === $this->url) {
                
            }
        }
    }

    private function post(){
        foreach ($this->getRoutes as $key => $value) {
            if ($key === $this->url) {
                
            }
        }
    }

}
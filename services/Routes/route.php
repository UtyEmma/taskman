<?php
namespace Service\Routes;

 

class Routes { 

    public function get(string $url, array $controller){
        // return new Requests($url, $parameters, $parameters);
    }

    public function post(string $url, array $parameters = []){
        return $this->requests->makeRequest('post', $url, $parameters);
    }
    
}
<?php 

//Handles Both Form Requests and HTTP Requests
class Client
{

    public function __construct(){

    }

    public function get(string $url, array $parameters = []){
        return $this->makeRequest('get', $url, $parameters);
    }

    public function post(string $url, array $parameters = []){
        return $this->makeRequest('get', $url, $parameters);
    }

    public function put(string $url, array $parameters = []){
        return $this->makeRequest('get', $url, $parameters);
    }

    public function delete(string $url, array $parameters = []){
        return $this->makeRequest('get', $url, $parameters);
    }

    public function get(string $url, array $parameters = []){
        return $this->makeRequest('get', $url, $parameters);
    }

    private function makeRequest(string $httpVerb, string $url, array $parameters = []){

    }

}
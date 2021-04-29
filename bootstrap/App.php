<?php
namespace Bootstrap;

class App {

    
    function server(){
        $array = ['/taskman/index.php', "/taskman"."/"];
        
        if(!in_array($_SERVER['REQUEST_URI'], $array )){
            $page = $this->loadPage();
            
            $page_explode = explode('/', $page);
            $page = [$page_explode[2], $page_explode[3],$page_explode[4]];
            $url = implode('/', $page);
    
            require $url;
            return;
        }
        
        require 'src/views/index.html';
    }

    public function loadPage(){
        $method = $_SERVER['REQUEST_METHOD'];

        $method === 'GET' ? $status = $this->getPage() : $status =  $this->error();

        return $status;
    }

    protected function getPage(){
        $baseUrl = $_SERVER['REQUEST_URI'];
        return $baseUrl;
    }

    protected function error(){
        print_r("Invalid Request");
        return;
    }
}

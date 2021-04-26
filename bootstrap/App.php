<?php
namespace Bootstrap;

class App {

    
    function server($i){
        $array = ['/taskman/index.php', "/taskman"."/"];
        
        if(!in_array($_SERVER['REQUEST_URI'], $array )){
            $page = $this->loadPage();
            
            $page_explode = explode('/', $page);
            $page = [$page_explode[2], $page_explode[3],$page_explode[4]];
            $url = implode('/', $page);
    
            if($i === 0){
                require $url;
                $i=1;
            }
            return;
        }
        require 'src/views/index.html';
    }

    public function loadPage(){
         
         $host = $_SERVER['SERVER_NAME'];
    
         $method = $_SERVER['REQUEST_METHOD'];

        $method === 'GET' ? $status = $this->requirePage() : $status =  $this->error();

        return $status;
    }

    protected function requirePage(){
        $baseUrl = $_SERVER['REQUEST_URI'];

        $dir = $baseUrl;

        return $dir;
    }

    protected function error(){
        print_r("Invalid Request");
        return;
    }
}

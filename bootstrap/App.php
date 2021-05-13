<?php
namespace Bootstrap;

use Services\Requests\Requests;

class App {

    function server(){
        $this->request = new Requests();
    }
}

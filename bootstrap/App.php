<?php
namespace Bootstrap;

use Services\Requests\Client;
use Services\Requests\Requests;

class App {

    function server(){
        $this->request = new Requests();
    }
}

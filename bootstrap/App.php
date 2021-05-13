<?php
namespace Bootstrap;

use Services\Requests\Client;
use Services\Requests\Requests;

class App {

    var $client;

    function server(){
        $this->request = new Requests();
    }
}

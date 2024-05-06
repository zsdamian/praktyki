<?php

namespace App;

use App\Core\Request;
use App\Core\Router;

class Bootstrap {

    private const CONFIG_DATABSE = [
        'host' => 'mysql',
        'user' => 'root',
        'pass' => 'root',
        'db' => 'praktyki'
    ];

    public function run(): void
    {
        $request=new Request();
        $router=new Router();

        $router->route($request); 


    }

}


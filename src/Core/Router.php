<?php

namespace App\Core;

class Router {

    private $routes;

    public function __construct()
    {
        $this->routes=require_once "config/routes.php";
    }
    public function route(Request $request)
    {
        foreach($this->routes as $key=> $value)
        {
            if ($key === $request->getUrl())
            {
                $value($request);
                return;
            }

        }
        echo '404';
    }


}
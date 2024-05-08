<?php

namespace App\Core;

class Router {

    private $routes;
    private $dbConnection;

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $json = file_get_contents('config/routes.json');
        $this->routes = json_decode($json, true);
    }

    public function route(Request $request): string
    {
        foreach ($this->routes as $key => $value) {
            if ($key === $request->getUrl()) {
                $base = new Base($this->dbConnection);
                return $this->callController($request, $value, $base);
            }
        }
        return "404";
    }

    private function callController(Request $request, array $config, Base $base): string
    {
        $controllerName = $config["controller"];
        $actionName = $config["action"];
        $controller = new $controllerName();
        return $controller->$actionName($request, $base);
    }
}

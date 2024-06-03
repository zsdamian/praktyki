<?php

namespace App\Core;

use App\Core\Request;
use App\Core\Container;

class Router
{
    private $routes;
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->routes = json_decode(file_get_contents('config/routes.json'), true);
    }
    
    public function route(Request $request): string
    {
        foreach ($this->routes as $pattern => $config) {
            if (preg_match($pattern, $request->getUrl(), $matches)) {
                $request->setArguments($matches);
                return $this->callController($request, $config);
            }
        }
        return "404 Not Found";
    }
    
    private function callController(Request $request, array $config): string
    {
        $controllerName = $config["controller"];
        $actionName = $config["action"];
        $controller = new $controllerName($this->container);
        return $controller->$actionName($request);
    }
}
?>

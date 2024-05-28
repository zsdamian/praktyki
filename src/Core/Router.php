<?php

namespace App\Core;

class Router {

    /**
     * @var array
     */
    private $routes;

    /**
     * @var Container
     */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->routes = json_decode(file_get_contents('config/routes.json'), true);
    }
    public function route(Request $request): string
    {
        foreach ($this->routes as $key => $value) {
            $matches = [];
            if (preg_match($key, $request->getUrl(), $matches)) {
                $request->setArguments($matches);
                return $this->callController($request, $value);
            }
        }
        return "404 Router.php";
    }
    private function callController(Request $request, array $config): string
    {
        $controllerName = $config["controller"];
        $actionName = $config["action"];
        $controller = new $controllerName($this->container);
        return $controller->$actionName($request);
    }
}

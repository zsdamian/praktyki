<?php

namespace App;

use App\Core\Container;
use App\Core\Request;
use App\Core\Router;
use App\Model\AbstractModel;
use App\Model\CategoryModel;
use App\Model\ProductModel;
class Bootstrap {

    private $config;
    public function run(): void
    {
        $this->loadConfig();


        $container = $this->initContainer();
        $request = new Request();
        $router = new Router($container);

        echo $router->route($request);
    }
    private function initContainer(): Container
    {
        
        $container = new Container();
        $dbConfig = $this->config['database'];
        $pdo = new \PDO(sprintf('mysql:host=%s;dbname=%s', $dbConfig['host'], $dbConfig['db']),
            $dbConfig['user'],
            $dbConfig['pass']
            
    );

        $request = new Request();

        $categories = new CategoryModel($pdo);
        $product = new ProductModel($pdo);
        $container->addService('pdo', $pdo);

        $container->addService('Request', $request);

        $container->addService('CategoryModel', $categories);
        $container->addService('ProductModel', $product);
        
        return $container;

        
    }

    private function loadConfig(): void
    {
        $this->config = require_once 'config/config.php';
    }

}
?> 

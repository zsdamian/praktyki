<?php

namespace App;

use App\Core\Container;

use App\Core\Request;
use App\Core\Router;

use App\Model\Database;

use App\Model\ShopMain;
use App\Model\ShopCategory;
use App\Model\ShopProduct;
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



        $database = new Database($pdo);

        $request = new Request();

        $shopmian = new ShopMain($pdo);
        $shopcategory = new ShopCategory($pdo);
        $shopproduct = new ShopProduct($pdo);

        $container->addService('pdo', $pdo);
        $container->addService('database', $database);

        $container->addService('Request', $request);

        $container->addService('ShopMain', $shopmian);
        $container->addService('ShopCategory', $shopcategory);
        $container->addService('ShopProduct', $shopproduct);
        
        return $container;

        
    }

    private function loadConfig(): void
    {
        $this->config = require_once 'config/config.php';
    }

}
?> 
    <button onclick="window.location.href='http://localhost:8000/sklep'">Przejdź do Sklep</button>
    <button onclick="window.location.href='http://localhost:8000/sklep/agd'">Przejdź do Sklep/agd</button>
    <button onclick="window.location.href='http://localhost:8000/sklep/agd/odkurzacz'">Przejdź do Sklep/agd/odkurzacz</button><br>
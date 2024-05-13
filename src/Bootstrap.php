<?php

namespace App;

use App\Core\Container;
use App\Core\Request;
use App\Core\Router;
use App\Core\Database;

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

        $container->addService('pdo', $pdo);
        $container->addService('database', $database);

        return $container;
    }

    private function loadConfig(): void
    {
        $this->config = require_once 'config/config.php';
    }

}
?> 
    <button onclick="window.location.href='http://localhost:8000/kontakt'">Przejdź do Kontakt</button>
    <button onclick="window.location.href='http://localhost:8000/opinie'">Przejdź do Opinie</button>
    <button onclick="window.location.href='http://localhost:8000/produkty'">Przejdź do Produkty</button>
    <button onclick="window.location.href='http://localhost:8000/chuj'">Przejdź do 404</button>
    <button onclick="window.location.href='http://localhost:8000/sklep'">Przejdź do Sklep</button>
    <button onclick="window.location.href='http://localhost:8000/sklep/vape'">Przejdź do Sklep/vape</button>
    <button onclick="window.location.href='http://localhost:8000/sklep/vape/liquidy'">Przejdź do Sklep/vape/liquidy</button><br>
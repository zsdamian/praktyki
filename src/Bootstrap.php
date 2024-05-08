<?php

namespace App;

use App\Core\Request;
use App\Core\Router;
use App\Core\Base;

class Bootstrap {

    private const CONFIG_DATABASE = [
        'host' => 'mysql',
        'user' => 'root',
        'pass' => 'root',
        'db' => 'praktyki'
    ];

    public function run(): void
    {  
        $dbConnection = new \PDO(
            'mysql:host=' . self::CONFIG_DATABASE['host'] . ';dbname=' . self::CONFIG_DATABASE['db'],
            self::CONFIG_DATABASE['user'],
            self::CONFIG_DATABASE['pass']
        );

        $request = new Request();
        $router = new Router($dbConnection);
        echo $router->route($request);
    }

}
?> 
    <button onclick="window.location.href='http://localhost:8000/kontakt'">Przejdź do Kontakt</button>
    <button onclick="window.location.href='http://localhost:8000/opinie'">Przejdź do Opinie</button>
    <button onclick="window.location.href='http://localhost:8000/baza'">Przejdź do Baza</button>
    <button onclick="window.location.href='http://localhost:8000/chuj'">Przejdź do 404</button><br>
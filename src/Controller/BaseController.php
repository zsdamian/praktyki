<?php

namespace App\Controller;

use App\Core\Container;
use App\Core\Request;
use App\Core\Database;

class BaseController{

    /**
     * @var Container
     */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request): string
    {
        $drinks = $this->container->getService('database')->getDrinks();
        return $this->view('Drinks', ['Drinks' => $drinks]);
    }

    private function view($view, $data = []) {
        extract($data);
        include __DIR__ . "/../View/$view.php";
        return ob_get_clean();
    }
}



//metody statyczne
//core -> database
//kilka metod statycznych które będą wykonywać zapytania

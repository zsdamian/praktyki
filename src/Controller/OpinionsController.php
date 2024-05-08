<?php

namespace App\Controller;

use App\Core\Container;
use App\Core\Request;
use App\Core\Database;
class OpinionsController{

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
        $comments = $this->container->getService('database')->getComments();
        return $this->view('Comments', ['Comments' => $comments]);
    }


    private function view($view, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../View/$view.php";
        return ob_get_clean();
    }
}

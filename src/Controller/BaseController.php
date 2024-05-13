<?php
namespace App\Controller;

use App\Core\Container;
abstract class BaseController
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function view($view, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . "/../View/$view.php";
        return ob_get_clean();
    }

    
    
}

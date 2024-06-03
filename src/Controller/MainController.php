<?php

namespace App\Controller;

use App\Core\Request;

class MainController extends BaseController
{
    public function index(Request $request): string
    {
        $randomProducts = $this->container->get('ProductModel')->getRandomProducts();
        return $this->view('Main', ['randomProducts' => $randomProducts]);
    }
}

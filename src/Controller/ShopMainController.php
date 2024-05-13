<?php

namespace App\Controller;

use App\Core\Request;

class ShopMainController extends BaseController
{
    public function index(Request $request): string
    {
        $categories = $this->container->get('database')->getCategories();
        return $this->view('Categories', ['Categories' => $categories]);
    }
}



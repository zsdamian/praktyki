<?php

namespace App\Controller;

use App\Core\Request;
class ShopProductController extends BaseController
{
    public function index(Request $request): string
    {
        $product = $this->container->get('database')->getProduct();
        return $this->view('Category', ['Category' => $product]);
    }
}
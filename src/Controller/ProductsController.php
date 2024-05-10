<?php
namespace App\Controller;

use App\Core\Container;
use App\Core\Request;

class ProductsController extends BaseController
{
    public function index(Request $request): string
    {
        $products = $this->container->get('database')->getProducts($category);
        return $this->view('Products', ['Products' => $products]);////gunwo gunwo gunwo
    }
}
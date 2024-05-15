<?php

namespace App\Controller;

use App\Core\Request;

class ShopCategoryController extends BaseController
{
    public function index(Request $request): string
    {
        $products = $this->container->get('ShopProduct')->getProductsByCategory($request->getArgument('category'));
        return $this->view('ShopCategory', ['products' => $products]);
    }
}

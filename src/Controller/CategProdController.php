<?php

namespace App\Controller;

use App\Core\Request;

class CategProdController extends BaseController
{
    public function index(Request $request): string
    {
        $categorySlug = $request->getArgument('category');
        $products = $this->container->get('ProductModel')->getProductsByCategory($categorySlug);
        return $this->view('CategProd', ['products' => $products, 'category' => ['slug' => $categorySlug]]);
    }
}

<?php

namespace App\Controller;

use App\Core\Request;
class ShopProductController extends BaseController
{
    public function index(Request $request): string
    {
        $product = $this->container->get('ShopProduct')->getProduct($request->getArgument('product'));
        return $this->view('ShopProduct', ['product' => $product]);
    }
}

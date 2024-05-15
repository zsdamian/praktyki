<?php

namespace App\Controller;

use App\Core\Request;

class ShopCategoryController extends BaseController
{
    public function index(Request $request): string
    {
        $category = $this->container->get('ShopCategory')->getCategoryProducts();
        return $this->view('ShopCategory', ['category' => $category]);
    }
}



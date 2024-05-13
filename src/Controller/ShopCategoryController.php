<?php

namespace App\Controller;

use App\Core\Request;

class ShopCategoryController extends BaseController
{
    public function index(Request $request): string
    {
        $category = $this->container->get('database')->getCategoryProducts();
        return $this->view('Category', ['Category' => $category]);
    }
}



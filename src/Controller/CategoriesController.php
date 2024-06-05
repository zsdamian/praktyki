<?php

namespace App\Controller;

use App\Core\Request;

class CategoriesController extends BaseController
{
    public function index(Request $request): string
    {
        $categories = $this->container->get('CategoryModel')->getCategories();
        return $this->view('Categories', ['categories' => $categories]);
    }
}

<?php
namespace App\Controller;

class CategoriesController extends BaseController
{
    public function index()
    {
        $categories = [
            'cleaning_products' => 'Artykuły spożywcze',
            'drink_products' => 'Napoje',
            'food_products' => 'Środki czystości'
        ];

        return $this->view('Categories', ['categories' => $categories]);
    }
}
?>

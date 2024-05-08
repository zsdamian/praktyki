<?php

namespace App\Controller;

use App\Core\Request;
use App\Core\Base;

class BaseController{
    public function index(Request $request, Base $base): string 
    {
        $drinks = $base->getDrinks();
        return $this->view('Drinks', ['Drinks' => $drinks]);
    }

    private function view($view, $data = []) {
        extract($data);
        include __DIR__ . "/../View/$view.php";
        return ob_get_clean();
    }
}





//metody statyczne
//core -> database
//kilka metod statycznych które będą wykonywać zapytania
<?php

namespace App\Controller;

use App\Core\Request;
use App\Core\Base;
class OpinionsController{
    public function index(Request $request, Base $base): string 
    {
        $comments = $base->getComments();
        return $this->view('Comments', ['Comments' => $comments]);
    }


    private function view($view, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/../View/$view.php";
        return ob_get_clean();
    }
}
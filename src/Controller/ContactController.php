<?php

namespace App\Controller;

use App\Core\Request;

class ContactController {

    public function index(Request $request): string
    {
        print_r($request->getQuery());
        return 'Kontakt';
        //do indexu dostan requesta i print wszystkie query
    }
    
}


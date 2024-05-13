<?php

namespace App\Controller;

use App\Core\Request;

class ContactController
{
    public function index(Request $request): string
    {
        $url = $request->getUrl();
        $arguments = $request->getArgument($url);
        print_r($url . "<br>");
        print_r($arguments);
        return "";
    }
}



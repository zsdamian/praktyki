<?php

namespace App\Core;

class Request {

    public function getUrl(): string
    {
        return rtrim($_GET['url'], '/');
    }

    public function getQuery(): array
    {
        return array_filter($_GET, function($k) {
            return $k !== 'url';
        }, ARRAY_FILTER_USE_KEY);
    }

}
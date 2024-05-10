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
    
    public function getQueryParam(string $param): ?string
    {
        return isset($_GET[$param]) ? $_GET[$param] : null;
    }

    public function clearQueryParam(string $param): ?string
    {
        if (isset($_GET[$param])) {
            $value = $_GET[$param];
            unset($_GET[$param]);
            return $value;
        } else {
            return null;
        }
    }
    
}

$request = new Request();
$url = $request->getUrl();
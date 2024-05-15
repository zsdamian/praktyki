<?php

namespace App\Core;

class Request
{
    public function getUrl(): string
    {
        return rtrim(strtolower($_GET['url']), '/');
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

    public function getArgument(string $url): array
    {
        $pattern = "/.*\/(?'arg1'.*)\/(?'arg2'.*)/";
        preg_match($pattern, $url, $matches); 
        
        $args = array(
            'arg1' => isset($matches['arg1']) ? $matches['arg1'] : null,
            'arg2' => isset($matches['arg2']) ? $matches['arg2'] : null
        );
    
        return $args;   
    }


}

$request = new Request();
$url = $request->getUrl();
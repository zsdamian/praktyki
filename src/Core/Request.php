<?php

namespace App\Core;

class Request
{
    /** @var string[] List of PATH arguments */
    private $arguments;

    public function getUrl(): string
    {
        return rtrim(strtolower($_GET['url']), '/');
    }

    public function setArguments(array $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function getArgument(string $name): ?string
    {
        return $this->arguments[$name] ?? null;
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



}

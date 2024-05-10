<?php

namespace App\Core;

class Container
{

    /**
     * @var array
     */
    private $services;

    public function __construct(array $services = [])
    {
        $this->services = $services;
    }

    public function addService(string $serviceName, $service): Container
    {
        $this->services[$serviceName] = $service;

        return $this;
    }

    public function getService(string $serviceName)
    {
        return $this->services[$serviceName];
    }

    public function get(string $serviceName)
    {
        return $this->getService($serviceName);
    }

}

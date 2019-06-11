<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample;

class Request
{

    private $value;
 
    public function __construct($service)
    {
        $this->value = $service;
    }
 
    public function getService()
    {
        return $this->value;
    
    }
    
}
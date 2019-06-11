<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample;


class JsonService implements Handler
{

    private $successor;
 
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }
 
    public function handleRequest($request)
    {
        if ($request->getService() == "JSON")
        {
            echo ("I am parsing JSON!");
        }
        else if ($this->successor != NULL)
        {
            $this->successor->handleRequest($request);
        }
    }
    
}
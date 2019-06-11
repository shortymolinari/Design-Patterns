<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample;


class XMLService implements Handler
{

    private $successor;
 
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }
 
    public function handleRequest($request)
    {
        if ($request->getService() == "XML")
        {
            echo ("I am parsing XML");
        }
        else if ($this->successor != NULL)
        {
            $this->successor->handleRequest($request);
        }
    }
    
}
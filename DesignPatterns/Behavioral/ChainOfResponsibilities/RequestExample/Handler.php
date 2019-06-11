<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample;

interface Handler
{
    public function handleRequest($request); 
    public function setSuccessor($nextService);     
}
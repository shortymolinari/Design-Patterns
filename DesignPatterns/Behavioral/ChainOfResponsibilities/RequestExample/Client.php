<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample\Hadler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample\JsonService;
use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample\XMLService;
use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestExample\Request;

$json = new JsonService();
$xml = new XMLService();

$json->setSuccessor($xml);

$request = new Request("XML");

$json->handleRequest($request);
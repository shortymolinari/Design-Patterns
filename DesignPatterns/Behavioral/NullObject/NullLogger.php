<?php

namespace DesignPatterns\Behavioral\NullObject;

//require '../../../vendor/autoload.php';

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}
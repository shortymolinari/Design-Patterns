<?php

namespace DesignPatterns\Behavioral\NullObject;

//require '../../../vendor/autoload.php';

class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}

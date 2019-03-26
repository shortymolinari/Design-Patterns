<?php

namespace DesignPatterns\Behavioral\NullObject;

require '../../../vendor/autoload.php';

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;
use DesignPatterns\Behavioral\NullObject\Service;

class LoggerDemo
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $expect = '';
        echo $service->doSomething();
        if ($expect == $service->doSomething()) {
            echo 'No debe salir nada' . PHP_EOL;
        }
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $expect = 'We are in DesignPatterns\Behavioral\NullObject\Service::doSomething';
        echo $service->doSomething();
    }
}


$loggerDemo = new LoggerDemo();
$loggerDemo->testNullObject();
$loggerDemo->testStandardLogger();
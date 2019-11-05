<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\LogExample;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
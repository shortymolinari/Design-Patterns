<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\LogExample;

interface LoggerFactory
{
    public function createLogger(): Logger;
}

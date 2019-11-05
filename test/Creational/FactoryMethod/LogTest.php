<?php
declare(strict_types=1);

namespace Tests\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\LogExample\FileLogger;
use DesignPatterns\Creational\FactoryMethod\LogExample\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\LogExample\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\LogExample\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

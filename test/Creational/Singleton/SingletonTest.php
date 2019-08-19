<?php

namespace Test\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function setUp():void
    {
        parent::setUp();
        $this->firstCall = Singleton::getInstance();
        $this->secondCall = Singleton::getInstance();
    }

    /**
     * @group Singleton
     * @test
     */
    public function uniqueness()
    {
        $this->assertInstanceOf(Singleton::class, $this->firstCall);
        $this->assertSame($this->firstCall, $this->secondCall);
    }
}
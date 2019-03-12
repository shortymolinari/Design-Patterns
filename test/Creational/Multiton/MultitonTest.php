<?php

namespace Test\Creational\Multiton;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $this->secondCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $this->thirdCall = Multiton::getInstance(Multiton::INSTANCE_2);
    }

    /**
     * @group Multiton
     * @test
     */
    public function uiqueness()
    {
        $this->assertInstanceOf(Multiton::class, $this->firstCall);
        $this->assertSame($this->firstCall, $this->secondCall);
    }

    /**
     * @group Multiton
     * @test
     */
    public function uniqueness_for_every_instance()
    {
        $this->assertInstanceOf(Multiton::class, $this->firstCall);
        $this->assertInstanceOf(Multiton::class, $this->thirdCall);
        $this->assertNotSame($this->firstCall, $this->thirdCall);
    }
}
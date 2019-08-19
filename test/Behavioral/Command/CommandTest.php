<?php

namespace Test\Behavioral\Command;

use DesignPatterns\Behavioral\Command\HelloExample\HelloCommand;
use DesignPatterns\Behavioral\Command\HelloExample\Invoker;
use DesignPatterns\Behavioral\Command\HelloExample\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    protected $invoker;
    protected $receiver;
    protected  $currentDate;

    public function setUp():void {
        parent::setUp();
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();

        $this->currentDate = "[" . date('Y-m-d') . "]";
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();
        
        $this->assertEquals('Hello World', $this->receiver->getOutput());
    }

    public function testInvocationWithDate()
    {
        $this->receiver->enableDate();
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();

        $this->assertEquals("Hello World {$this->currentDate}", $this->receiver->getOutput());
    }
}

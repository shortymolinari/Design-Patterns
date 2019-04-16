<?php
namespace DesignPatterns\Behavioral\Command\Tests;

use DesignPatterns\Behavioral\Command\HelloExample\Invoker;
use DesignPatterns\Behavioral\Command\HelloExample\Receiver;
use DesignPatterns\Behavioral\Command\HelloExample\HelloCommand;
use DesignPatterns\Behavioral\Command\HelloExample\AddMessageDateCommand;
use PHPUnit\Framework\TestCase;


class UndoableCommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        
        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();
        $invoker->run();

        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
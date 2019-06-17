<?php

namespace Tests\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\ChatRoomExample\ChatRoom;
use DesignPatterns\Behavioral\Mediator\ChatRoomExample\User;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    private $mediator;
    private $edwin;
    private $george;
    private $time;
    private $message;

    public function setUp():void{
        parent::setUp();

        $this->mediator = new ChatRoom();
        $this->edwin = new User('Edwin', $this->mediator);
        $this->george = new User('George', $this->mediator);

        $this->time = date('M d, y H:i');
    }

    public function testEdwinCanSendAMessage() {
        $this->message = $this->time . '[' . $this->edwin->getName() . ']:';
        $this->assertEquals(
            $this->message . 'Hello! My name is Edwin.',
            $this->edwin->send('Hello! My name is Edwin.')
        );
    }

    public function testGeorgeCanSendAMessage() {
        $this->message = $this->time . '[' . $this->george->getName() . ']:';
        $this->assertEquals(
            $this->message . 'Hi there! My name is George.',
            $this->george->send('Hi there! My name is George.')
        );
    }

   public function testEdwinAndGeorgeCanChat() {
        $this->message = $this->time . '[' . $this->edwin->getName() . ']:';
        $this->assertEquals(
            $this->message . 'Hello! My name is Edwin.',
            $this->edwin->send('Hello! My name is Edwin.')
        );

        $this->message = $this->time . '[' . $this->george->getName() . ']:';
        $this->assertEquals(
            $this->message . 'Hi there! My name is George. How are you?',
            $this->george->send('Hi there! My name is George. How are you?')
        );
    }







}
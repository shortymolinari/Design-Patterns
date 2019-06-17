<?php


namespace DesignPatterns\Behavioral\Mediator\ChatRoomExample;


class User
{
    protected $name;
    protected $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        return $this->chatMediator->showMessage($this, $message);
    }
}
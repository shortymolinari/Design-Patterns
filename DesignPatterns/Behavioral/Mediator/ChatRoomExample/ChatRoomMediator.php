<?php

namespace DesignPatterns\Behavioral\Mediator\ChatRoomExample;


interface  ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
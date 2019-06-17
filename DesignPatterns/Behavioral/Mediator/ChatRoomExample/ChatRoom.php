<?php


namespace DesignPatterns\Behavioral\Mediator\ChatRoomExample;


class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message) {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        return $time . '[' . $sender . ']:' . $message;
    }
}
<?php

namespace DesignPatterns\Behavioral\Observer\UserExample;

use SplSubject;
use SplObserver;

class UserObserver implements SplObserver
{
    private $changedUsers = [];

   
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
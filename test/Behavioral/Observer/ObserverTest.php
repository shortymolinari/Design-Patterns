<?php

namespace Test\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\UserExample\User;
use DesignPatterns\Behavioral\Observer\UserExample\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}


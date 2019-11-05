<?php
declare(strict_types=1);

namespace Tests\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\ManagerExample\DevelopmentManager;
use DesignPatterns\Creational\FactoryMethod\ManagerExample\MarketingManager;
use DesignPatterns\Creational\FactoryMethod\ManagerExample\Developer;
use DesignPatterns\Creational\FactoryMethod\ManagerExample\CommunityExecutive;
use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase
{
    public function testCanCreateDeveloperInterview()
    {
        $devManager = new DevelopmentManager();

        $this->assertInstanceOf(DevelopmentManager::class, $devManager);
        $this->assertSame('Asking about design patterns!', $devManager->takeInterview());
    }
    

    public function testCanCreateCommunityExecutiveInterview()
    {
        $marketingManager = new MarketingManager();

        $this->assertInstanceOf(MarketingManager::class, $marketingManager);
        $this->assertSame('Asking about community building', $marketingManager->takeInterview());
    }
}

<?php
declare(strict_types=1);

namespace Tests\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\DoorExample\WoodenDoorFactory;
use DesignPatterns\Creational\AbstractFactory\DoorExample\IronDoorFactory;
use PHPUnit\Framework\TestCase;

class DoorTest extends TestCase
{
    public function testCanCreateAWoodenDoor()
    {
        $woodenFactory = new WoodenDoorFactory();
        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertEquals('I am a wooden door', $door->getDescription());
        $this->assertEquals('I can only fit wooden doors', $expert->getDescription());
    }

    public function testCanCreateAIronDoor()
    {
        $ironFactory = new IronDoorFactory();
        $door = $ironFactory->makeDoor();
        $expert = $ironFactory->makeFittingExpert();

        $this->assertEquals('I am an iron door', $door->getDescription());
        $this->assertEquals('I can only fit iron doors', $expert->getDescription());
    }
}
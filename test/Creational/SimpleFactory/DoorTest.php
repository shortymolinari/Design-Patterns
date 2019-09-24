<?php
declare(strict_types=1);

namespace Tests\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\DoorExample\Door;
use DesignPatterns\Creational\SimpleFactory\DoorExample\DoorFactory;
use PHPUnit\Framework\TestCase;

class DoorTest extends TestCase
{
    public function testCanCreateWoodenDoor()
    {
        $door = DoorFactory::makeDoor(100, 200);
       
        $this->assertSame((float) 100, $door->getWidth());
        $this->assertSame((float) 200, $door->getHeight());
    }
}
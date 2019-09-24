<?php
declare(strict_types=1);

namespace Tests\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\BicycleExample\Bicycle;
use DesignPatterns\Creational\SimpleFactory\BicycleExample\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
<?php
declare(strict_types=1);

namespace Test\Creational\Builder;

use DesignPatterns\Creational\Builder\CarExample\Parts\Car;
use DesignPatterns\Creational\Builder\CarExample\Parts\Truck;
use DesignPatterns\Creational\Builder\CarExample\TruckBuilder;
use DesignPatterns\Creational\Builder\CarExample\CarBuilder;
use DesignPatterns\Creational\Builder\CarExample\Director;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
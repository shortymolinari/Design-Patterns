<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory\BicycleExample;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
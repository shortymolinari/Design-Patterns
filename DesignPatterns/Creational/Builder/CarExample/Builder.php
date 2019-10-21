<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CarExample;

use DesignPatterns\Creational\Builder\CarExample\Parts\Vehicle;

interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}

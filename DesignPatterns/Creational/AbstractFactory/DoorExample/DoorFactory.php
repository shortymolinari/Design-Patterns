<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;

interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;
}
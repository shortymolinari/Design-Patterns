<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        return 'I can only fit wooden doors';
    }
}
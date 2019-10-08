<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;


class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        return 'I can only fit iron doors';
    }
}
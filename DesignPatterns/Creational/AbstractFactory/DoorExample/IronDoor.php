<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;

class IronDoor implements Door
{
    public function getDescription()
    {
        return 'I am an iron door';
    }
}
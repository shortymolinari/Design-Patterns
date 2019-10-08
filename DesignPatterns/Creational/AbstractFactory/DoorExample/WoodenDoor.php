<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        return 'I am a wooden door';
    }
}
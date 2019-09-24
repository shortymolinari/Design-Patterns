<?php
namespace DesignPatterns\Creational\SimpleFactory\DoorExample;

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
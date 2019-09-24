<?php
namespace DesignPatterns\Creational\SimpleFactory\DoorExample;

interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}
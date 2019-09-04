<?php

namespace DesignPatterns\Structural\Decorator\CoffeeExample;

class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple Coffee';
    }
}
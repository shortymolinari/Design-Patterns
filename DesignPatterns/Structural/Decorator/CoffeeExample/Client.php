<?php

namespace DesignPatterns\Structural\Decorator\CoffeeExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Decorator\CoffeeExample\SimpleCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\MilkCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\WhipCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\VanillaCoffee;


$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . PHP_EOL; // 10
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 12
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 17
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 20
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip, vanilla
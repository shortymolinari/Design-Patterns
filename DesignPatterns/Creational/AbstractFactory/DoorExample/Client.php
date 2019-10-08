<?php

namespace DesignPatterns\Creational\AbstractFactory\DoorExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Creational\AbstractFactory\DoorExample\WoodenDoorFactory;
use DesignPatterns\Creational\AbstractFactory\DoorExample\IronDoorFactory;

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

echo $door->getDescription() . PHP_EOL;  // Output: I am a wooden door
echo $expert->getDescription() . PHP_EOL; // Output: I can only fit wooden doors

// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

echo $door->getDescription() . PHP_EOL;  // Output: I am an iron door
echo $expert->getDescription() . PHP_EOL; // Output: I can only fit iron doors
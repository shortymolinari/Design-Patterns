<?php
namespace DesignPatterns\Creational\SimpleFactory\DoorExample;

require '../../../../vendor/autoload.php';

use DesignPatterns\Creational\SimpleFactory\DoorExample\Door;
use DesignPatterns\Creational\SimpleFactory\DoorExample\DoorFactory;


// Make me a door of 100x200
$door = DoorFactory::makeDoor(100, 200);

echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

// Make me a door of 50x100
$door2 = DoorFactory::makeDoor(50, 100);

echo 'Width: ' . $door2->getWidth();
echo 'Height: ' . $door2->getHeight();
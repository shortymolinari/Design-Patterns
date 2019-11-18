<?php

namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\StaticFactory;
use DesignPatterns\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Creational\StaticFactory\FormatString;


require "../../../vendor/autoload.php";


if (StaticFactory::factory('number') instanceof FormatNumber) {
    echo "Number Format" . PHP_EOL;
}


if (StaticFactory::factory('string') instanceof FormatString) {
    echo "String Format" . PHP_EOL;
} 

try {
    StaticFactory::factory('object');

} catch (\InvalidArgumentException $e) {
    echo "Unknown format given";
}
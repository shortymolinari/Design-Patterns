<?php

namespace DesignPatterns\Behavioral\Iterator\RadioStationExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Iterator\RadioStationExample\RadioStation;
use DesignPatterns\Behavioral\Iterator\RadioStationExample\StationList;

$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

echo $stationList->current() . PHP_EOL;

foreach($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(89)); // Will remove station 89

echo "Eliminando Radio Estacion 89..." . PHP_EOL;
echo "Ahora solo hay ". $stationList->count() . PHP_EOL;

foreach($stationList as $station) {
    echo $station2->getFrequency() . PHP_EOL;
}
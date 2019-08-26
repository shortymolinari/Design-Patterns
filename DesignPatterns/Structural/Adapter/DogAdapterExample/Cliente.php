<?php

namespace DesignPatterns\Structural\Adapter\DodAdapterExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Adapter\DogAdapterExample\WildDog;
use DesignPatterns\Structural\Adapter\DogAdapterExample\WildDogAdapter;
use DesignPatterns\Structural\Adapter\DogAdapterExample\Hunter;

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
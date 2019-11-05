<?php

namespace DesignPatterns\Creational\FactoryMethod\ManagerExample;

use DesignPatterns\Creational\FactoryMethod\ManagerExample\DevelopmentManager;
use DesignPatterns\Creational\FactoryMethod\ManagerExample\MarketingManager;

require "../../../../vendor/autoload.php";

$devManager = new DevelopmentManager();
echo $devManager->takeInterview(); // Output: Asking about design patterns

$marketingManager = new MarketingManager();
echo $marketingManager->takeInterview(); // Output: Asking about community building.
<?php

namespace DesignPatterns\Creational\Builder\BurgerExample;


require "../../../../vendor/autoload.php";

use DesignPatterns\Creational\Builder\BurgerExample\Burger;
use DesignPatterns\Creational\Builder\BurgerExample\BurgerBuilder;

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();

                  
<?php
declare(strict_types=1);

namespace Test\Creational\Builder;

use DesignPatterns\Creational\Builder\BurgerExample\Burger;
use DesignPatterns\Creational\Builder\BurgerExample\BurgerBuilder;
use PHPUnit\Framework\TestCase;

class BurgerTest extends TestCase
{
    public function testCanBuilBurger()
    {
        $burger = (new BurgerBuilder(14))
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();

        $this->assertInstanceOf(Burger::class, $burger);
    }
}
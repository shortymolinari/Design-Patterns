<?php
declare(strict_types=1);

namespace Tests\Structural\Decorator;

use DesignPatterns\Structural\Decorator\CoffeeExample\SimpleCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\MilkCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\WhipCoffee;
use DesignPatterns\Structural\Decorator\CoffeeExample\VanillaCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorCoffeeTest extends TestCase
{
    public function testCanCalculatePriceForSimpleCoffee()
    {
        $someCoffee = new SimpleCoffee();
        
        $this->assertSame(10, $someCoffee->getCost());
        $this->assertSame('Simple Coffee', $someCoffee->getDescription());
    }

    public function testCanCalculatePriceForMilkCoffee()
    {
        $someCoffee = new SimpleCoffee();
        $someCoffee = new MilkCoffee($someCoffee);

        $this->assertSame(12, $someCoffee->getCost());
        $this->assertSame('Simple Coffee, milk', $someCoffee->getDescription());
    }

    public function testCanCalculatePriceForWhipCoffee()
    {
        $someCoffee = new SimpleCoffee();
        $someCoffee = new MilkCoffee($someCoffee);
        $someCoffee = new WhipCoffee($someCoffee);
        
        $this->assertSame(17, $someCoffee->getCost());
        $this->assertSame('Simple Coffee, milk, whip', $someCoffee->getDescription());
    }

    public function testCanCalculatePriceForVanillaCoffee()
    {
        $someCoffee = new SimpleCoffee();
        $someCoffee = new MilkCoffee($someCoffee);
        $someCoffee = new WhipCoffee($someCoffee);
        $someCoffee = new VanillaCoffee($someCoffee);
        
        $this->assertSame(20, $someCoffee->getCost());
        $this->assertSame('Simple Coffee, milk, whip, vanilla', $someCoffee->getDescription());
    }
}
<?php
declare(strict_types=1);

namespace Tests\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\ProductExample\DigitalProduct;
use DesignPatterns\Creational\AbstractFactory\ProductExample\ProductFactory;
use DesignPatterns\Creational\AbstractFactory\ProductExample\ShippableProduct;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertInstanceOf(DigitalProduct::class, $product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertEquals(150, $product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertEquals(200, $product->calculatePrice());
    }
}
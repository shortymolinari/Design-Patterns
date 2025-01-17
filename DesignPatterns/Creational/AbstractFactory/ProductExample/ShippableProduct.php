<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ProductExample;

class ShippableProduct implements Product
{
    /**
     * @var float
     */
    private $productPrice;

    /**
     * @var float
     */
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ProductExample;

class DigitalProduct implements Product
{
    /**
     * @var int
     */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }
}

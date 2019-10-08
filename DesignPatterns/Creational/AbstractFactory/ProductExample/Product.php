<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\ProductExample;

interface Product
{
    public function calculatePrice(): int;
}
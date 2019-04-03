<?php

namespace DesignPatterns\Behavioral\Specification\Example1;

interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}
<?php

namespace DesignPatterns\Behavioral\State\OrderExample;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}

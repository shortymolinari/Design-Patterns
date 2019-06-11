<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample;

class Paypal extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
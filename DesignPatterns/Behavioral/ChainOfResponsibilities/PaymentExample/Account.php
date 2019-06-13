<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample;

abstract class Account
{
    protected $successor;
    protected $balance;
    public $message = [];

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            $string = "Paid {$amountToPay} using {$this->getCalledClass()}";
            array_push($this->message, $string);
            //echo sprintf('Paid %s using %s', $amountToPay, $this->getCalledClass());
        } elseif ($this->successor) {
            $string = "Cannot pay using {$this->getCalledClass()}. Proceeding ..";
            array_push($this->message, $string);
           // echo sprintf('Cannot pay using %s. Proceeding ..', $this->getCalledClass());
            $this->successor->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

    public function canPay($amount):bool
    {
        return $this->balance >= $amount;
    }

    public function addMoney(float $money) {
        $this->balance = $this->balance + $money;
    }

    public function subtractMoney(float $money) {
        $this->balance = $this->balance - $money;
    }

    public function getMessages(){
        return $this->message;
    }

    public function getCalledClass() {
        $called = get_called_class();
        $string = explode('\\', $called);
        return end($string);
    }

}
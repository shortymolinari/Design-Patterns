<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample;

use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\PaymentMessage as Message;

abstract class Account
{
    protected $successor;
    protected $balance;
    protected $message;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            $this->message = sprintf('Paid %s using %s', $amountToPay, $this->getCalledClass());
            Message::addMessage($this->message);
        } elseif ($this->successor) {
            $this->message =  sprintf('Cannot pay using %s. Proceeding ..', $this->getCalledClass());
            Message::addMessage($this->message);
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

    public function getMessage() {
        return $this->message;
    }

    public function getMessages() {
        return Message::getMessages();
    }

    public function getUniqueMessages() {
        return Message::getUniqueMessages();
    }

    public function getCalledClass() {
        $called = get_called_class();
        $string = explode('\\', $called);
        return end($string);
    }

}
<?php

namespace Test\Behavioral\ChangeOfResponsabilities;

use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Account;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bitcoin;
use PHPUnit\Framework\TestCase;

class ChangeOfResponsabilitiesTest extends TestCase
{
    protected $bank;
    protected $paypal;
    protected $bitcoin;

    public function setUp():void {

        parent::setUp();
        $this->bank = new Bank(100);    
        $this->paypal = new Paypal(200);
        $this->bitcoin = new Bitcoin(300);

        $this->bank->setNext($this->paypal);
        $this->paypal->setNext($this->bitcoin);
    }

    public function testBankAccountCannotPay() {
        $this->bank->pay(259);
        $this->assertEquals('Cannot pay using Bank. Proceeding ..', $this->bank->getMessage());
    }

    public function testPaypalAccountCannotPay() {
        $this->bank->pay(259);
        $this->assertEquals('Cannot pay using Paypal. Proceeding ..', $this->paypal->getMessage());
    }

    public function testBankAccountCanPay() {   
        $this->bank->addMoney(200);
        $this->bank->pay(259);
        $this->assertEquals('Paid 259 using Bank', $this->bank->getMessage());
    }

    public function testPaypalAccountCanPay() {
        $this->paypal->addMoney(100);
        $this->bank->pay(259);
        $this->assertEquals('Cannot pay using Bank. Proceeding ..', $this->bank->getMessage());
        $this->assertEquals('Paid 259 using Paypal', $this->paypal->getMessage());
    }

    public function testBitcoinAccountCanPay() {
        $this->bank->pay(259);
        $this->assertEquals('Cannot pay using Bank. Proceeding ..', $this->bank->getMessage());
        $this->assertEquals('Cannot pay using Paypal. Proceeding ..', $this->paypal->getMessage());
        $this->assertEquals('Paid 259 using Bitcoin', $this->bitcoin->getMessage());
    }

    public function testBitcoinAccountCanPayArrayMessage() {
        $this->bank->pay(259);
        $this->assertContains('Paid 259 using Bitcoin', $this->bitcoin->getMessages());
    }

    public function testBitcoinAccountCanPayUniqueMessage() {
        $this->bank->pay(259);
        $this->assertContains('Paid 259 using Bitcoin', $this->bitcoin->getUniqueMessages());
    }
}

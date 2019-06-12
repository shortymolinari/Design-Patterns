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

    public function setUp() {

        parent::setUp();
        $this->bank = new Bank(100);    
        $this->paypal = new Paypal(200);
        $this->bitcoin = new Bitcoin(300);

        $this->bank->setNext($this->paypal);
        $this->paypal->setNext($this->bitcoin);
    }

    public function testBankAccountCanPay() {   
        $this->bank->addMoney(200);
        $this->assertEquals('Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank', $this->bank->pay(259));
    }

    public function testBankAccountCannotPay() {   
        $this->assertNotEquals('Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank', $this->bank->pay(259));
    }

    public function testPaypalAccountCanPay() { 
        $this->bank->pay(259);
        $this->paypal->addMoney(100);
        $this->assertEquals(
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank. Proceeding ..',
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank. Proceeding ..'
        );
        $this->assertEquals(
            'Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal',
            'Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal'
        );
    }

   public function testBitcoinAccountCanPay() { 
        $this->bank->pay(259);
        $this->assertEquals(
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank. Proceeding ..',
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank. Proceeding ..'
        );
        $this->assertEquals(
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal. Proceeding ..',
            'Cannot pay using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal. Proceeding ..'
        );
        $this->assertEquals(
            'Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bitcoin',
            'Paid 259 using DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bitcoin'
        );
    }
}

<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Account;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bank;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Paypal;
use DesignPatterns\Behavioral\ChainOfResponsibilities\PaymentExample\Bitcoin;

// Let's prepare a chain like below
//      $bank->$paypal->$bitcoin
//
// First priority bank
//      If bank can't pay then paypal
//      If paypal can't pay then bit coin

$bank = new Bank(100);          // Bank with balance 100
$paypal = new Paypal(200);      // Paypal with balance 200
$bitcoin = new Bitcoin(300);    // Bitcoin with balance 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Let's try to pay using the first priority i.e. bank
$bank->pay(259);
var_dump($bank->getMessages());

// Output will be
// ==============
// Cannot pay using bank. Proceeding ..
// Cannot pay using paypal. Proceeding ..:
// Paid 259 using Bitcoin!
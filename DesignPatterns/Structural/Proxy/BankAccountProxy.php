<?php

namespace DesignPatterns\Structural\Proxy;

use DesignPatterns\Structural\Proxy\HeavyBankAccount;
use DesignPatterns\Structural\Proxy\BankAccount;

class BankAccountProxy extends HeavyBankAccount implements BankAccount {
    /**
     * @var int
     */
    private $balance;

    public function getBalance(): int
    {
        // because calculating balance is so expensive,
        // the usage of BankAccount::getBalance() is delayed until it really is needed
        // and will not be calculated again for this instance

        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}

<?php

class BankAccount
{
    private $accountNumber;
    private $amount;
    public function __construct($accountNumber, $amount)
    {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
    }
    public function __toString()
    {
        return "Bank Account No: $this->accountNumber. Balance: $$this->amount ";
    }
}

echo new BankAccount('123456', 200);
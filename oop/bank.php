<?php

class BankAccount
{
    private $balance;
    public function __construct(int $balance = 1000)
    {
        return $this->balance = $balance;
    }
    public function withdraw(int $amount): void
    {
        if($amount > $this->balance)
        {
            throw new Exception('Amount is greater than balance');
        }
        $this->balance -= $amount;
    }
    public function getBalance(): int 
    {
        return $this->balance;
    }
}

$bankAccount = new BankAccount;
echo $bankAccount->withdraw(300);
echo $balance = $bankAccount->getBalance();
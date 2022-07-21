<?php

class Robot
{
    public function greet()
    {
        return "Hello";
    }

    public final function id()
    {
        return uniqid();
    }
}

class Android extends Robot
{
    public function greet()
    {
        $greeting = parent::greet();
        return $greeting . " from android";
    }

}

$android = new Android;
echo $android->greet();

class BankAccount
{
    private $balance;

    public function __construct($amount)
    {
        $this->balance = $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
       return $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if($amount > 0 && $amount <= $this->balance)
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

class CheckingAccount extends BankAccount
{
    private $minBalance;
    public function __construct($amount, $minBalance)
    {
        if($amount > 0 && $amount >= $minBalance)
        {
            parent::__construct($amount);
            $this->minBalance = $minBalance;    
        }else{
            throw new InvalidArgumentException("amount must be more");
        }
    }

    public function withdraw($amount)
    {
        $canWithdraw = $amount > 0 && $this->getBalance() - $amount > $this->minBalance;
        if($canWithdraw){
            parent::withdraw($amount);
            return true;
        }
        return false;
    }
}

$check = new CheckingAccount(1000, 100);
echo $check->withdraw(800);
<?php

echo "<pre>";

class Customer
{
    private $id;
    private $name;
    private $email;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function getInitial()
    {
        if($this->name !== '')
        {
            return strtoupper(substr($this->name, 0, 1));
        }
    }
}

$customer = new Customer(10, 'Unknow', 'test@gmail.com');
$str = serialize($customer);
file_put_contents('customer.dat', $str);

$str = file_get_contents('customer.dat');
var_dump(unserialize($str));

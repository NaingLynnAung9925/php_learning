<?php

function fibonacci(int $n) : int 
{
    if($n === 0 || $n === 1)
    {
        return $n;
    }
    if($n >= 50)
    {
        throw new Exception("Not Supported");
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(4);

function splitIntoFirstAndLastName(string $name): array
{
    return explode(' ', $name);
}
$name = 'Ryan Kane';
$newName = splitIntoFirstAndLastName($name);

var_dump($name);
print_r($newName);

Class configuration
{
    private $configuration = [];
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

}

$configuration = new Configuration([
    'foo' => 'bar',
]);
var_dump($configuration);
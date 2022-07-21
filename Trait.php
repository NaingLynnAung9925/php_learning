<?php

trait Hello
{
    public function hello()
    {
        echo "Hello ";
    }
}

trait World
{
    public function world()
    {
        echo "World";
    }
}

class SayHelloWorld
{
    use Hello, World;
}

$sayHelloWorld = new SayHelloWorld;
echo $sayHelloWorld->hello();
echo $sayHelloWorld->world();

echo "<br>";


// Conflict

trait A
{
    public function smallTalk()
    {
        echo "a";
    }

    public function bigTalk()
    {
        echo "A";
    }
    
}

trait B
{
    public function smallTalk()
    {
        echo "b";
    }
    public function bigTalk()
    {
        echo "B";
    }
}

class Talker
{
    use A, B{
        B::smallTalk insteadOf A;
        A::bigTalk insteadOf B;
    }
}

$talker = new Talker;
echo $talker->smallTalk();
echo $talker->bigTalk();
echo "<br>";

// Traits composed from traits

trait SayHello
{
    public function hello()
    {
        echo "Hello ";
    }
}

trait SayWorld
{
    public function world()
    {
        echo "World";
    }
}

trait HelloWorld
{
    use SayHello, SayWorld;
}

class MyHelloWorld
{
    use HelloWorld;
}

$myHelloWorld = new MyHelloWorld;
echo $myHelloWorld->hello();
echo $myHelloWorld->world();
<?php

abstract class Person {
    abstract public function greet();
}

class English extends Person
{
    public function greet()
    {
        return "Hallo ini English";
    }
}

class German extends Person
{
    public function greet()
    {
        return "Hallo ini German";
    }
}

class French extends Person
{
    public function greet()
    {
        return "Hallo ini French";
    }
}

function showGreeting(Person $person)
{
    echo $person->greet() . PHP_EOL;
}

$english = new English();
$german = new German();
$french = new French();

showGreeting($english);
showGreeting($german);
showGreeting($french);

?>

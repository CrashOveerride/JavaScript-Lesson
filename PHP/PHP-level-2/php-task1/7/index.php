<?php

class A 
{
    public function foo() 
    {
        static $x = 0;
        echo ++$x . "<br>";
    }
}

class B extends A { }

$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 

echo "Создается 2 разных класса. Из-за этого функция внутри класса выполняется отдельно от другого.
Значение при этом у каждого класса свои.";

?>
<?php
namespace finalProject;
// class BaseClass 
// {
//     public function test() 
//     {
//         echo "cal method BaseClass::test()\n";
//     }

//     final public function moreTesting() 
//     {
//         echo "Call method BaseClass::moreTesting()\n";
//     } 
// }

// class ChildClass extends BaseClass
// {
//     public function moreTesting() 
//     {
//         echo "Call method ChildClass::moreTesting()\n";
//     }
// }

// class SubObject 
// {
//     static $instances = 0;
//     public $instance;

//     public function __construct()
//     {
//         $this->instance = ++self::$instances;
//     }
//     public function __clone()
//     {
//         $this->instance = ++self::$instances;
//     }
// }

// class MyCloneable
// {
//     public $object1;
//     public $object2;
    
//     function __clone()
//     {
//         $this->object1 = clone $this->object1;
//     }
// }


class A 
{
    public $foo = 1;
    public $one = 1;
    
    public function show_one()
    {
        echo $this->one;
    }
}

$a = new A();
$b = $a;


// $b->foo = 2;
// echo $a->foo."\n";
// $c = new A();
// $c->foo = 11;
// echo $c->foo."\n";

abstract class Animal 
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract public function speak();
}

class Dog extends Animal 
{
    public function speak()
    {
        echo $this->name . " barks";
    }
}

class Cat extends  Animal 
{
    public function speak()
    {
        echo $this->name . " mayu";
    }
}

interface AnimalShelter 
{
    public function adopt(string $name):Animal;
}

class CatShelter implements AnimalShelter{
    public function adopt(string $name): Cat
    {
        return new Cat($name);
    }
}

class DogShelter implements AnimalShelter {
    public function adopt(string $name): Dog{
        return new Dog($name);
    }
}

// $kitty = (new CatShelter)->adopt("Rizhik");


echo __NAMESPACE__;

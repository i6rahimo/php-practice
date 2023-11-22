<?php
class BaseClass 
{
    public function test() 
    {
        echo "cal method BaseClass::test()\n";
    }

    final public function moreTesting() 
    {
        echo "Call method BaseClass::moreTesting()\n";
    } 
}

class ChildClass extends BaseClass
{
    public function moreTesting() 
    {
        echo "Call method ChildClass::moreTesting()\n";
    }
}

class SubObject 
{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }
    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;
    
    function __clone()
    {
        $this->object1 = clone $this->object1;
    }
}
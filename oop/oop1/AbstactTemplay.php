<?php

//  abstract class AbstactTemplay
//  {
//     protected string $name;
//     protected string $surname;
//     protected float $salary;

//     public function __construct(string $name, string $surname, float $salary)
//     {
//         $this->name = $name;
//         $this->surname = $surname;  
//         $this->salary = $salary;
//     }
//     public function getName() 
//     {
//         return $this->name;
//     }
//  }


 abstract class AbstractClass {
    abstract protected function getVelue();
    abstract protected function prefixValue($prefix);

    public function printOut() {
        print $this->getValue() . "\n";
    }
 }

 class ConcreteClass1 extends AbstractClass 
 {
    protected function getVelue(){
        return "ConcreteClass1";
    }
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
 }

 class ConcreteClass2 extends AbstractClass 
 {
    public function getVelue(){
        return "ConcreteClass2";
    }
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
 }

 $class1 = new ConcreteClass1;
 $class1->printOut();
<?php

 abstract class AbstactTemplay
 {
    protected string $name;
    protected string $surname;
    protected float $salary;

    public function __construct(string $name, string $surname, float $salary)
    {
        $this->name = $name;
        $this->surname = $surname;  
        $this->salary = $salary;
    }
    public function getName() 
    {
        return $this->name;
    }
 }
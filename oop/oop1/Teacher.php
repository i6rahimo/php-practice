<?php 

class Teacher extends AbstactTemplay 
{
    public function getSalary() 
    {
        return $this->salary * 1.2;
    }

}
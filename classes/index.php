<?php 

class SimpleClass 
{
    public $var = 'значение по умолчанию';


    public function displayVar() {
        echo $this->var;
    }
}


$err = new SimpleClass();
$err->displayVar();
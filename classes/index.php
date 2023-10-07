<?php 

class SimpleClass 
{
    public $var = 'значение по умолчанию';


    public function displayVar() {
        echo $this->var;
    }
}


$err = new SimpleClass();
// $err->displayVar();



class User 
{
    public int $id;
    public ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new User(123, "qwee");

// var_dump($user->id);
// var_dump($user->name);


class Shape 
{
    public int $numberOfSides;
    public string $name;

    public function setNumberOfSides(int $numberOfSides): void 
    {
        $this->numberOfSides = $numberOfSides;
    }
    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    public function getNumberOfSides(): int
    {
        return $this->numbrtOfSides;
    }
    public function getName(): string 
    {
        return $this->name;
    }
}

$circle = new Shape();
$circle->setName('circle');
echo $circle->getName();
echo $circle->getNumberOfSides();
echo $circle->getNumberOfSides();


$triangle = new Shape();
$triangle->setName('triangle');
$triangle->setNumberOfSides(3);
var_dump($triangle->getName());
var_dump($triangle->getNumberOfSides());


class Test 
{
    public readonly string $prop;
    public function __construct(string $prop) {
        $this->prop = $prop;
    }
}

$test = new Test('foobar');
var_dump($test->prop);


?>










 
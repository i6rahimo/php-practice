<?php

class BaseClass 
{
    function __construct(){
        print "Constructor class BaseClass" . "\n";
    }
}

class SubClass extends BaseClass
{
    function __construct(){
        parent::__construct();
        print "Constructor classes SubClass" . "\n";
    }
}

class OtherClass extends BaseClass 
{

}

// $obj = new BaseClass();


// $obj = new SubClass();


// $obj = new OtherClass();


abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    abstract public function speak();
}

class Dog extends Animal{
    public function speak()
    {
        echo $this->name . " layet";
    }
}

class Cat extends Animal 
{
    public function speak()
    {
        echo $this->name . " may";
    }
}


class Base 
{
    public function foo(int $a) {
        echo "Allow\n";
    }
}

class Extend1 extends Base 
{
    public function foo(int $a = 5)
    {

        echo parent::foo($a);
    }
}

class Extends2 extends Base 
{
    function foo(int $a, $b = 5)
    {
        parent::foo($a);
    }
}

$extends1 = new Extend1();
// $extends1->foo();



// Отличие parent:: self:: static::

class BaseTestCase 
{
    public function setUp(): void{
        echo "Run base test case set up here..." . "\n";
    }
}
// (new BaseTestCase())->setUp();

class FeatureTest extends BaseTestCase
{
    public function testMethod(): void 
    {   
        echo "Fisrt text was will be \n";
        parent::setUp();
    }
}

// (new FeatureTest())->setUp();
// (new FeatureTest())->testMethod();


class Model 
{
    public static string $connection = 'mysql' . "\n";

    public function makeConnection(): void 
    {
        echo 'Making connection to: ' . "\n" . self::$connection;
    }
}

class User extends Model 
{
    public static string $connection = 'postgres' . "\n";
}

// (new Model())->makeConnection();
// (new User())->makeConnection();



class Model1 
{
    public static string $connection = 'mysql' . "\n";

    public function makeConnection(): void 
    {
        echo 'Making connection to: ' . "\n" . static::$connection;
    }
}


class User1 extends Model1
{
    public static string $connection = 'postgress' . "\n";
}


// (new Model1())->makeConnection();
// (new User1())->makeConnection();



// Пример #13 Фатальная ошибка, когда дочерний метод делает необязательный параметр обязательным.


class Base1
{
    public function foo(int $a = 5) 
    {
        echo "Allow \n";
    }
}

class  BaseExtend extends Base
{
    function foo(int $a)
    {
        parent::foo($a);
    }
}

// $test1 = new BaseExtend();
// $test1->foo();


// Пример #2 Использование аргументов в конструкторах

class Point 
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0)
    {
        $this->x = $x;  
        $this->y = $y;
    }
}

// $p1 = new Point(4, 5);


// static $x = new Foo;
// const C = new Foo;

// function test($param =  new Foo) {}
// #[AnAttribute(new Foo)]
// class Test 
// {
//     public function __construct(
//         public $prop = new Foo,
//     ){}
// }

// function test(
//     $a = new (CLASS_NAME_CONSTANT)(),
//     $b = new class {},
// ){}


// Пример #5 Использование статических методов для создания объектов

class Product 
{
    private ?int $id;
    private ?string $name;

    private function __constaruct(?int $id = null, ?string $name = null) 
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function fromBasicData(int $id, string $name): static
    {
        $new = new static($id, $name);
        return $new;
    }

    public static function fromJson(string $json): static
    {
        $data = json_decode($json);
        return new static ($data['id'], $data['name']);
    }

    public static function fromXml(string $sml): static 
    {
        $data = convert_xml_to_array($xml);
        $new = new static();
        $new->id = $data['id'];
        $new->name = $data['name'];
        return $new;
    }
}


$p1 = Product::fromBasicData(5, 'Widget');
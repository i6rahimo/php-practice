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

// class Product 
// {
//     private ?int $id;
//     private ?string $name;

//     private function __constaruct(?int $id = null, ?string $name = null) 
//     {
//         $this->id = $id;
//         $this->name = $name;
//     }

//     public static function fromBasicData(int $id, string $name): static
//     {
//         $new = new static($id, $name);
//         return $new;
//     }

//     public static function fromJson(string $json): static
//     {
//         $data = json_decode($json);
//         return new static ($data['id'], $data['name']);
//     }

//     public static function fromXml(string $sml): static 
//     {
//         $data = convert_xml_to_array($xml);
//         $new = new static();
//         $new->id = $data['id'];
//         $new->name = $data['name'];
//         return $new;
//     }
// }


// $p1 = Product::fromBasicData(5, 'Widget');



class MyDestructorCLass 
{
    function __construct()
    {
        print "Constructor \n";
    }
    function __destruct()
    {
        print "Destroy " . __CLASS__ . "\n";
    }
}

// $obj = new MyDestructorCLass();

class MyClass 
{
    const CONST_VALUE = 'Inner constant' . "\n";
}

class OtherClass1 extends MyClass
{   
    public static $my_static = "Static inner \n";

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}   

// $className = 'OtherClass1';
// $className::doubleColon();


class Foo 
{
    public static $my_static = "foo";
    public static function aStaticMethod() {
        return self::$my_static;
    }
}

class Bar extends Foo 
{
    public function fooStatic() {
        return parent::$my_static;
    }
}

// print Bar::$my_static . "\n";


// $foo = new Foo();

// print $foo->aStaticMethod() . "\n";


interface Spotsmen 
{
    public function run();
    public function gym();
    public function eat();
}

class Gymnast implements Spotsmen
{   
    public function run() {
        echo "I'm running \n";
    }
    public function gym()  {
        echo "I'm gym \n";

    }
        
    public function eat() {
        echo "I'm eating \n";

    }
    
} 


class Name 
{
    public function prepare(string $name): string 
    {
        return ucfirst(trim($name));
    }
}

// $ex = new Name();
// echo $ex->prepare("I6rahim rer e e e ");

// class Loger 
// {
//     public function log($img) {
//         echo $img;
//     }
// }

// // $uil->setLogger(new Loger());
// $util->setLogger(new class {
//     public function log($img) {
//         echo $img;
//     }
// });


class Outer
{
    private $prop = 1;
    protected $prop2 = 2;


    protected function func1() 
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer {
            private $prop3;

            public function __construct($prop) 
            {
                $this->prop3 = $prop;
            }
            public function func3() 
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

// echo (new Outer)->func2()->func3();

// $var = "Hello world \n";
// $func = function () use (& $var) {$var =$var . "we are visiting";};
// $func();
// echo $var;



class MyClass1 
{
    public $var1 = 'property 1';
    public $var2 = 'property 2';
    public $var3 = 'property 3';

    protected $protected = 'Protected variable';
    private $private = 'Private variable';

    function iterateVisible() {
        // echo "MyClass1::iterateVisible:\n";
        foreach ($this as $key) {
            // print "$key => $value \n";
            // print "$value\n";
            // echo $key . $this . "\n";
        }
    }
}

// $class = new MyClass1();
// $class->iterateVisible();

class Tweet extends Enity 
{
    protected $id;
    protected $text;
    public function __construct($id, $text, array $meta)
    {
        $this->id = $id;
        $this->text = $text;
        parent::__construct($meta);
    }
}

class Enity 
{
    protected $meta;
    public function __construct(array $meta)
    {
        $this->meta = $meta;
    }
}

final class Product
{
    public function __construct(
        private string $name,
        private float $pricem,
        private string $currency,
    ){}
}

final class Subscription 
{
    public function __construct(
        private string $name,
        private float $price,
        private string $currency,
    ){}
}

class Money 
{
    private float $amount;
    private string $currency;
    public function __construct(float $amount, string $currency)
    {
        $this->ensureAmountIsPositive($amount);
        $this->amount = $amount;
        $this->currency = $currency;
    }
}
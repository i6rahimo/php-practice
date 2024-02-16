<?php 

// class SimpleClass 
// {
//     public $var = 'значение по умолчанию';


//     public function displayVar() {
//         echo $this->var;
//     }
// }


// $err = new SimpleClass();
// // $err->displayVar();



// class User 
// {
//     public int $id;
//     public ?string $name;

//     public function __construct(int $id, ?string $name)
//     {
//         $this->id = $id;
//         $this->name = $name;
//     }
// }

// $user = new User(123, "qwee");

// // var_dump($user->id);
// // var_dump($user->name);


// class Shape 
// {
//     public int $numberOfSides;
//     public string $name;

//     public function setNumberOfSides(int $numberOfSides): void 
//     {
//         $this->numberOfSides = $numberOfSides;
//     }
//     public function setName(string $name): void 
//     {
//         $this->name = $name;
//     }
//     public function getNumberOfSides(): int
//     {
//         return $this->numbrtOfSides;
//     }
//     public function getName(): string 
//     {
//         return $this->name;
//     }
// }

// $circle = new Shape();
// $circle->setName('circle');
// echo $circle->getName();
// echo $circle->getNumberOfSides();
// echo $circle->getNumberOfSides();


// $triangle = new Shape();
// $triangle->setName('triangle');
// $triangle->setNumberOfSides(3);
// var_dump($triangle->getName());
// var_dump($triangle->getNumberOfSides());


// class Test 
// {
//     public readonly string $prop;
//     public function __construct(string $prop) {
//         $this->prop = $prop;
//     }
// }

// $test = new Test('foobar');
// var_dump($test->prop);


// КОНСТАНТЫ 


class MyClass 
{
    const CONSTANT = 'значение константы';

    function showConstant() {
        echo self::CONSTANT . "\n";
    }
}


// echo MyClass::CONSTANT . "\n";

$classname = 'MyClass';
// echo $classname::CONSTANT . "\n";

$class = new MyClass();


const ONE = 1;

class foo {
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'Значение константы THREE - ' . self::THREE;

    function showSentence() {
        echo TWO;
    }
}

// class Foo {
//     public const BAR = 'bar';
//     public const BAZ = 'baz';
// }

// echo Foo::BAR; PHP_EOL;



// Конструктор

class BaseClass {
    function __construct() {
        print "Конструктор класса BaseClass \n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass \n";
    }
}

class OtherSubClass extends BaseClass {

}

// $obj = new BaseClass();
// $subOvj = new SubClass();

// Пример #2 Использование аргументов в конструкторах


class Point {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
        echo $this->y + $this->x;
    }
}


$p1 = new Point(4, 5);
// $p2 = new Point(2,4);
// $p3 = new Point(y: 10, x: 22);

// var_dump($p1);
// var_dump($p2);
// var_dump($p3);

// Пример выше можно будет переписать следующим образом: 

class PointTwo {
    public function __construct(protected int $x, protected int $y = 0) {

    }
}


// Пример #4 Пример использования new в инициализации класса

static $x = new Foo;
const C = new Foo;

function test($param = new Foo) {

}


class Test {
    public function __construct(
        public $prop = new Foo,
    ) {}
}
// function test(
//     $a = new (CLASS_NAME_CONSTANT)(),
//     $b = new class{},
//     $c = new A(...[]),
//     $d = new B($abc),
// ){}


// class Foo1 {
//     public $a = "foobarstring";
//     public $b;
//     public $c = ['some', 'values'];
// }

// for ($i = 0; $i < 1; $i++) {
//     $m = memory_get_usage();
//     ${'var' . $i} = new Foo;
//     echo memory_get_usage() - $m . "\n";
// }

//  Область видимости

class MyClass1 {
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    public function printHello() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;

    }
}

$obj = new MyClass1();
// echo $obj->public;
// echo $obj->protected;
// echo $obj->private;
// $obj->printHello();


class MyClass2 extends MyClass1 
{
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello() 
    {
        // echo $this->public;
        // echo $this->protected;
        // echo $this->private;

    }
}

// class Test1 {
//     private $foo;

//     public function __construct($foo) {
//         $this->foo = $foo;
//     }

//     private function bar() {
//         echo 'Доступ к закрытому методу.';
//     }
//     public function baz(Test1 $other) {
//         echo $other->foo;
//         $other->foo = 'hello';
//         // var_dump($other->foo);

//         // $other->bar();
//     }
// }


// $test = new Test1('test');

// $test->baz(new Test1('other'));
// // $test->baz();
// function takes_array($input)
// {
//     // echo "$input[0] + $input[1] = ", $input[0]+$input[1];
// }


// $makefoo = true;

// bar();

// if($makefoo) {
//     function foo() {
//         // echo 'Я не существую', func_num_args(), PHP_EOL;
//     }
// }

// if($makefoo) foo(1, 2);
// function bar() {
//     // echo 'Я существую';
// }





function testReturn(): ?string
{
    return 'elePhant';
}



class TestClass
{
    const CONSTANT = 'значение константы';

    function showConstant() {
        echo self::CONSTANT . "\n";
    }

}


echo TestClass::CONSTANT ."\n";


$classname = "TestClass";
echo $classname::CONSTANT . "\n";

$class = new TestClass();
$class->showConstant();

echo $class::CONSTANT ."\n";


?>










 
<?php

function recursion($a) {
    if($a <= 20) {
        echo "$a\n";
        recursion($a + 1); 
    }
}

// recursion(5);


// Пример #3 Передача аргументов по ссылке

function add_some_extra(&$string) {
    $string .= 'and someone else';
}
// $str = 'This is string';
// add_some_extra($str);
// echo $str;


// Пример #4 Использование значений по умолчанию в определении функции

function makeCoffee($type = 'capuchino') {
    return "Making couple $type";
}
// echo makeCoffee(), "<br/>";
// echo makeCoffee(null), "<br/>";
// echo makeCoffee('expresso'), "<br/>";

// Пример #5 Использование нескалярных типов в качестве значений по умолчанию

function makecoffeSecond($types = array('cappucino'), $coffeMaker = NULL) 
{
    $device = is_null($coffeMaker) ? "manually" : $coffeMaker;
    return "Making cup ".join(",", $types)." $device.\n";
}
// echo makecoffeSecond();
// echo makecoffeSecond('', 'kettle');


// Пример #11 Использование ... для доступа к аргументам

function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

// echo sum(1, 2, 3, 4);

// Пример #12 Использование ... для передачи аргументов

function add($a, $b) {
    return $a + $b;
}

// echo add(...[1, 2]). "\n";


// $a = [1, 2];
// echo add(...$a);

function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

// $a = new DateInterval('P1D');
// $b = new DateInterval('P2D');
// echo total_intervals('d', $a, $b). 'days';

// echo total_intervals('d', null);

// Пример #1 Передача массива в функцию

function takes_array($input) {
    echo "$input[1] + $input[1] + $input[2] = ", $input[0]+$input[1];
}
// takes_array([   2, 2, 2])

// Пример #6 Использование объектов в качестве значений по умолчанию (начиная с PHP 8.1.0)

class DefaultCoffeMaker {
    public function brew() {
        return 'Making coffee';
    }
}

class FancyCoffeMaker {
    public function brew() {
        return 'Making best coffe special for you';
    }
}

function makecoffeThird($coffeMaker = new DefaultCoffeMaker) {
    return $coffeMaker->brew();
}

// echo makecoffeThird();
// echo makecoffeThird(new FancyCoffeMaker)

// Пример #7 Некорректное использование значений по умолчанию

function makeyogurt($container = 'bowl', $flavour) {
    return "Making $container with $flavour yogurt";
}


// echo makeyogurt('malin');


function foo() {
    echo "In foo()";
}

function bar($arg = '') {
    echo "In bar(); argument was '$arg'. <br/>";
}

function echoit($string) {
    echo $string;
}
// $func = 'foo';
// $func();

// $func = 'bar';
// $func('test');

// Пример #2 Обращение к методам класса посредством переменных

class Foo {
    function Variable() {
        $name = 'Bar';
        $this->$name();
    }
    function Bar() {
        echo "This is Bar" . "<br/>";
    }
}

// $foo = new Foo();
// $funcname = "Variable";
// $foo->$funcname();

// Пример #3 Пример вызова переменного метода со статическим свойством

class FooTwo {
    static $variable = 'static property' . "<br/>";
    static function Variable() {
        echo 'Call method Variable' . "<br/>";
    }
}
// echo FooTwo::$variable;
// $variable = "Variable";
// FooTwo::$variable();

// Пример #4 Сложные callable-функции


class FooThree {
    static function bar() {
        echo "bar" . '<br/>';
    }
    function baz() {
        echo "baz" . "<br/>";
    }
}

// $foofunc = array('FooThree', 'bar');
// var_dump($foofunc);
// $foofunc();
// $foofunc// = array();



// $y  = 1;

// $fn1 = fn($x) => $x + $y;

// $fn2 = function($x) use($y) {
//     return $x + $y;
// };


// var_export($fn2(13));


$users = [['id' => 1, 'name' => 'Alex'], ['id' => 2, 'name' => 'Billy']];

$ids = array_map(function($user) {
    return $user['id'];
}, $users);
var_dump($ids);

?>

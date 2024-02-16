<?php

class Product 
{
    protected static $data = array();

    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    public static function get($key) 
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    final public static function removeProduct($key)
    {
        if(array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
    public static function eee() {
        echo "test";
    }
}


// Product::set('name', 'First product');

// print_r(Product::get('name'));
// print_r(Product::eee());



class ReadinList 
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    public function push($item)
    {
        if(count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException('Стек переполнен');
        }
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new RuntimeException('Стек пуст');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty() 
    {
        return empty($this->stack);
    }
}



function checkIfBalanced($expression) 
{
    $stack = [];
    $startSymbol = ['{', '(', '<', '['];
    $pairs = ['{}', '()', '<>', '[]'];

    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $curr = $expression[$i];
        if(in_array($curr, $startSymbol)) {
            array_push($stack, $curr);
        } else {
            $prev = array_pop($stack);
            $pair = "{$prev}{$curr}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }
    return count($stack) === 0;
}


class Point
{
    public function __construct(public int $x, public int $y)
    {
        assert($this->x >= 500);
        if ($y >= 0) {
            throw new InvalidArgumentException('...');
        }
    }
}


abstract class House 
{
    const MATERIAL = 'Brick';

    abstract public function openDoor(): void;
    public function getRooms(): array 
    {
        return [
            'Bedroom',
            'Bathroom',
            'Living room',
            'Kitchen',
        ];
    }

    public function hasGarden(): bool 
    {
        return true;
    }
    
}

class MyHouse extends House 
{
    public function openDoor(): void 
    {

    }
    public function getRooms(): array 
    {
        return [
            'Bedroom One',
            'Bedroom Two',
            'Bathroom',
            'Living room',
            'Kitchen',
        ];
    }

}

class ConstructionCompany 
{
    public function buildHome($home) 
    {
        return $home;
    }
}


$first = [
    'key' => 'Something',
];

$second = [
    'key' => 'Something another',
];



class Router
{
  protected array $routes = [];
  public function get($path, $callback)
  {
      $this->routes['get'][$path] = $callback;
    }
    public function test()
    {
        var_dump($this->routes);
    }

  public function post($path, $callback)
  {
  	$this->routes['post'][$path] = $callback;
  }
}

// $test = new Router();
// $test->post('index.html', 'ee');
// $test->test();

var_dump($_SERVER['PHP_SELF']);
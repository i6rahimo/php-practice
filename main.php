<?php 

// $a =  array('b' => 1, 'c' => 2);

// echo $a["b"];

// echo $a->c;

// $a = new dualArrayObject(array('b' => 1, 'c' => 2));


// class dualArrayObject extends ArrayObject {

//     function __get($name) {
//         return $this[$name] ?? null;
//     }
    
//     function __set($name, $value) {
//         return $this[$name] = $value;
//     }
// }

// echo $a['b'];
// echo $a->c;



$array = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
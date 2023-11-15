<?php

spl_autoload_register(function ($class_name) {
    include $class_name .".php";
    echo $class_name;
});

// require_once 'AbstactTemplay.php';
// require_once 'Student.php';
// require_once 'Teacher.php';

$student = new Student('Misha', 'Ivanov', 100);
$teacher = new Teacher('Sergey', 'Inogg', 500);

echo $teacher->getName() . PHP_EOL;
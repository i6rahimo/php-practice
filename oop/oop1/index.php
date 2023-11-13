<?php

require_once 'AbstactTemplay.php';
require_once 'Student.php';
require_once 'Teacher.php';

$student = new Student('Misha', 'Ivanov', 100);
$teacher = new Teacher('Sergey', 'Inogg', 500);

echo $teacher->getName() . PHP_EOL;
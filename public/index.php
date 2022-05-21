<?php
spl_autoload_register(function ($class) {
   $ds = DIRECTORY_SEPARATOR;
   $root['path'] = '';

   $class = str_replace('\\', $ds, $class);
   $root['path'] = dirname(__DIR__) . "/Classes/{$class}.php";
   require $root['path'];
});

use SubClasses\Class2;
$obj1 = new Class1();
$obj2 = new Class2();

$obj1->getClass1();
$obj2->getClass2();
?>
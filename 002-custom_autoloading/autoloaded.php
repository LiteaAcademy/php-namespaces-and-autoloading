<?php

spl_autoload_register(function ($name) {
    echo $name;
    $path = str_replace('\\', '/', $name);
   require_once $path . '.php';
});

class MyClass implements App\MyInterface
{
    //
}

$foo = new Baz();
$app = new MyApp();
$bar = new \App\Lib\Bar();
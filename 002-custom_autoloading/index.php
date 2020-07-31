<?php

require_once 'Foo.php';
require_once 'Bar.php';

use App\Lib\{
    Baz\Foo,
    Bar
};

$foo = new Foo();
$bar = new Bar();
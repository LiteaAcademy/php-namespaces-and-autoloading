<?php

namespace DanCharousek\Library;

class App
{
    public function run()
    {
        echo 'Hello from 3rd party library!';
    }
}

class Bar
{
    public function baz()
    {
        echo 'Hello from bar!';
    }
}

class Foo
{
    //
}
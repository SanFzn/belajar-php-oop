<?php

class Manager
{
    var string $name;
    var string $title;

    function sayHello (string $name)
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }
}

class VicePresident extends Manager
{
    function sayHello (string $name)
    {
        echo "Hi $name, my name is Vice President $this->name" . PHP_EOL;
    }

    public function __construct(string $name)
    {
        parent::__construct($name, "VP");
    }
}
<?php

class programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class backendProgrammer extends programmer
{
    
}

class frontendProgrammer extends programmer
{
    
}

class company
{
    var programmer $programmer;
}

function sayHello (programmer $programmer)
{
    echo "Hello " . $programmer->name . PHP_EOL;
}
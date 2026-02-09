<?php

abstract class animal {
    public string $name;

    public abstract function run();
}

class cat extends animal {
    public function run()
    {
        echo "cat $this->name is running." . PHP_EOL;
    }
}
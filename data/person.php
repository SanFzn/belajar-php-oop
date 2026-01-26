<?php

class person
{

    const AUTHOR = "SEKOLAHAN.ID";
    const APP_VERSION = "1.0.0";

    var string $name = "Isan";
    var ?string $address;
    var string $country = "Indonesia";

    public function __construct(string $name, ?string $address)
    {
        $this->name    = $name;
        $this->address = $address;
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }
}
?>
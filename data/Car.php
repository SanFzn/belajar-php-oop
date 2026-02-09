<?php

interface Car {
    function drive(): void;
    function getTire(): int;
}

class avanza implements Car {
    function drive(): void {
        echo "Drive AVANZA" . PHP_EOL;
    }

    function getTire(): int {
        return 4;
    }
}
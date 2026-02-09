<?php

interface HusBrand {
    function getBrand (): string;
}

interface isMaintenance {
    function isMaintenance(): bool;
}

interface Car {
    function drive(): void;
    function getTire(): int;
}

class avanza implements Car, isMaintenance, HusBrand {
    function getBrand(): string {
        return "Toyota";
    }

    function isMaintenance(): bool {
        return false;
    }

    function drive(): void {
        echo "Drive AVANZA" . PHP_EOL;
    }

    function getTire(): int {
        return 4;
    }
}
<?php

require_once 'data/Car.php';

$avanza = new Avanza();
$avanza -> getBrand();
$avanza -> drive();
echo $avanza -> getTire();
echo $avanza -> isMaintenance();
<?php

require_once 'data/Car.php';

$avanza = new Avanza();
$avanza -> drive();
echo $avanza -> getTire();
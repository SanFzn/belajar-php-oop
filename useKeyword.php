<?php

require_once 'data/conflict.php';

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
var_dump($conflict1);
var_dump($conflict2);

helpMe();
echo APPLICATION . PHP_EOL;
<?php

require_once 'data/manager.php';

$manager = new manager();
$manager->name = "Isan";
$manager->sayHello("Budi");

$vp = new vicePresident();
$vp->name = "Bambang";
$vp->sayHello("Budi");
<?php

require_once 'data/programmer.php';

$company = new company();
$company->programmer = new Programmer("Isan");
$company->programmer = new BackendProgrammer ("Budi");
$company->programmer = new FrontendProgrammer ("Joko");

var_dump($company);

sayHello(new Programmer("Isan"));
sayHello(new BackendProgrammer("Budi"));
sayHello(new FrontendProgrammer("Joko"));
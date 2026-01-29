<?php

require_once 'data/person.php';

$person1 = new person();
$person1->name    = "Isan";
$person1->address = null;

$person2 = new person();
$person2->name    = "Budi";
$person2->address = "Jakarta";
$person2->country = "Indonesia";

// var_dump($person1);
// var_dump($person2);

echo "name : $person1->name" . PHP_EOL;
echo "address : $person1->address" . PHP_EOL;
echo "country : $person1->country" . PHP_EOL;

// echo "name : $person2->name" . PHP_EOL;
// echo "address : $person2->address" . PHP_EOL;
// echo "country : $person2->country" . PHP_EOL;

?>
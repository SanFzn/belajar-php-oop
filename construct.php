<?php

require_once 'data/person.php';

$person = new person("Isan", "Bandung");
$person->country = "Indonesia";
var_dump($person);

?>
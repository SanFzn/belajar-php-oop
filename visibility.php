<?php

require_once 'data/product.php';

$product = new product("Apple", 10000);
echo $product->getName() . PHP_EOL;

//$product->name = "Orange"; // Error: Cannot access private property
//$product->price = 15000; // Error: Cannot access private property
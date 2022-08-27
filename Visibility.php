<?php

require_once "data/Product.php";

$product=new Product("Apel",2000);

echo $product->getName().PHP_EOL;
echo $product->getPrice().PHP_EOL;

$dummy=new ProductDummy("Dummy",4000);
$dummy->info();
<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';

$user = new User('Giovanni', 'Trapani', 'giovanni@gmail.com', 'Via dei Mille', new Card('Trapani Giovanni', 523345546, 111, '07/2025'));


$product = new Product('Friggitrice', 'aria', 90);
echo $product->getName() . ' ' . $product->getModel() . ' ' . $product->getPrice(true, 30) . '€';

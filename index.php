<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';

$user = new User('Giovanni', 'Trapani', 'giovanni@gmail.com', 'Via dei Mille', new Card('Trapani Giovanni', 523345546, 111, '07/2025'));
var_dump($user);

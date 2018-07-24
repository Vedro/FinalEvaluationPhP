<?php

// link the class to the index
require_once __DIR__.'./Cat.php';

// create new cat
$mango = new Cat();
// new cat uses function getinfo()
$mango->getInfo();

$kali = new Cat();
$kali->getInfo();
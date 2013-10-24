<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once 'autoload.php';

use Vendor\NyanCat;

$nyan_cat = new NyanCat();
$nyan = $nyan_cat -> meowUntilYouGoMad();
$fakeTreat = $nyan_cat->treatCat(3);
$goodTreat = $nyan_cat->treatCat(4);
$nyan_cat->setEyes('blue');

var_dump($nyan);
var_dump($fakeTreat);
var_dump($goodTreat);
var_dump($nyan_cat);

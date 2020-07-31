<?php

include_once('animal.php');
include_once('frog.php');
include_once('ape.php');

$sheep = new Animal("shaun");
$sheep->getCetak();

$sungokong = new ape ("Kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new frog ("Buduk");
$kodok->jump(); // "Hop hop"

?>
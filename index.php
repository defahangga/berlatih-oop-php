<?php

include_once('animal.php');
include_once('frog.php');
include_once('ape.php');

$sheep = new Animal("shaun");

echo $sheep->getCetak();

$sungokong = new ape ("kera sakti");
echo $sungokong->yell(); // "Auooo"


$kodok = new frog ("buduk");
echo $kodok->jump(); // "Auooo"



?>
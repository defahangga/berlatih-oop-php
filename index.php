<?php

include_once('animal.php');

$sheep = new Animal("shaun");

// echo $sheep->name; // "shaun"
// echo $sheep->legs; // 2
// echo $sheep->cold_blooded // false

echo $sheep->getCetak();




?>
<?php
include_once('animal.php');

class frog extends animal{

    public $animal_sound="";

    public function __construct($name, $legs = 2, $cold_blooded = "false", $animal_sound = "hop hop"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->animal_sound = $animal_sound;
    }

    public function jump(){
        return "$this->name <br> $this->cold_blooded <br> $this->animal_sound <br><br>";
    }

}




?>
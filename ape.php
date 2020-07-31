<?php
include_once('animal.php');

class ape extends animal{
    public $animal_sound="";

    public function __construct($name, $legs = 2, $cold_blooded = "false", $animal_sound = "Auoooo"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->animal_sound = $animal_sound;
        

    }

    public function yell(){
        return "$this->name <br> $this->legs <br> $this->cold_blooded <br> $this->animal_sound <br><br>";
    }
    
    
}


?>
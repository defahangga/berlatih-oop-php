<?php
include_once('animal.php');

class frog extends animal{

    public $animal_sound="";

    public function __construct($name, $legs = 4, $cold_blooded = "yes", $animal_sound = "Hop hop"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->animal_sound = $animal_sound;
    }

    public function jump(){
        echo "Name : $this->name <br> Legs : $this->legs <br> Cold blood : $this->cold_blooded <br> Animal sound : $this->animal_sound <br><br>";
    }

}

?>
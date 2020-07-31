<?php

class animal {

    // variabel global yang bisa dipanggil setelah class di instance          2
    public $name = "name",
           $legs = 0,
           $cold_blooded = "false";

    // function yang pasti dijalankan ketika class di instance                1
    // kemudian isi default akan menimpa variabel public diatas
    public function __construct($name, $legs = 2, $cold_blooded = "false"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    // fungsi mencetak data dari variabel global diatas
    public function getCetak()
    {
        echo "Name : $this->name <br> Legs : $this->legs <br> Cold blood : $this->cold_blooded <br><br>";
    }
    
}

?>
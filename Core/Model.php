<?php namespace Core;

class Model{

    public function __construct(){
        Database::connect();
        echo "<br>";
        echo "Modelo Padre: LISTO!!<br>";
    }
    
} 
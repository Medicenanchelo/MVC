<?php namespace App\Models;

use Core\Model;

class Home extends Model{
    function __construct()
    {
        new parent();
        echo "Modelo Home: LISTO!!<br>";
    }
}
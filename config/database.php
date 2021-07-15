<?php
//CONEXIÓN CON BASE DE DATOS

class Database {

    private $host = "localhost";
    private $name = "totalsalud";
    private $password = "";
    private $user = "admin";
    private $connect;

    public function connect() {
        try {
            $this->connect = new PDO("mysql:host=".$this->host.";dbname=".$this->name,$this->user,$this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "ERROR: ".$e->getMessage();
            die();
        }
    }
}
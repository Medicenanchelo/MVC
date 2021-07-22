<?php namespace Core;

use Exception;
use PDO;

class Database {

    static $host = "localhost";
    static $name = "DBNAME";
    static $password = "";
    static $user = "USERDB";
    static $connect;

    static function connect() {
        try {
            self::$connect = new PDO("mysql:host=".self::$host.";dbname=".self::$name,self::$user,self::$password);
            self::$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conectado a BD";
        } catch (Exception $e) {
            echo "ERROR: ".$e->getMessage();
            die();
        }
    }
}
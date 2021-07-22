<?php namespace Core;

class Session{
    function __construct()
    {
        
    }

    static function start(){
        session_start();
    }

    static function firstPass(){
        if(!isset($_SESSION['logIn'])){
            $_SESSION['logIn'] = false;
            $_SESSION['globalRole'] = 'Home';
        }
    }
}
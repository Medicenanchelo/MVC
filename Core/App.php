<?php
namespace Core;


class App
{
    function __construct()
    {
        $this->issetLog();
        $this->Route();
        $this->preLoad();
    }

    private function issetLog(){
        Session::start();
        Session::firstPass();   
    }

    private function Route(){
        Route::getUrl();   
    }

    private function preLoad(){

        if($_SESSION['globalRole'] != Route::$controller){
            echo "No Puedes Acceder a la Pagina";
        } else {
            new Load();
        }
    }

    
}

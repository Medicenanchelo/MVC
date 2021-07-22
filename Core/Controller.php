<?php namespace Core;

class Controller{

    public function __construct(){
        echo "Controlador Padre: LISTO!!<br>";
        $this->LoadModel();
        $this->view = new View();

    }

    private function LoadModel(){
        $modelFile = "../App/Models/".Route::$controller."Model.php";
        if (file_exists($modelFile)) {
            require_once($modelFile);
            $model = Route::$controller;
            $route = "App\\Models\\".$model;
            $model = new $route();
        }else{
            echo "No existe el Archivo";
        }
    }
}
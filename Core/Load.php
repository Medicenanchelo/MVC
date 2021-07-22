<?php

namespace Core;

class Load
{
    function __construct()
    {
        $controllerFile = "../App/Controllers/" . Route::$controller . "Controller.php";
        if (file_exists($controllerFile)) {
            require_once($controllerFile);
            $controller = Route::$controller;
            $route = "App\\Controllers\\".$controller;
            $controller = new $route();
            if (method_exists($controller, Route::$method)) {
                $controller->{Route::$method}(Route::$params);
            } else {
                echo "ERROR DE METODO";
            }
        } else {
            echo "ERROR de Load";
        }
    }
   
}

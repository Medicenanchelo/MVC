<?php

namespace Core;

use Controllers;

class Load
{
    function __construct()
    {
        $controllerFile = "../App/Controllers/" . Route::$controller . ".php";
        if (file_exists($controllerFile)) {
            require_once($controllerFile);
            $controller = Route::$controller;
            $route = "Controllers\\".$controller;
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

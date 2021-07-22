<?php namespace Core;

class View{
    static function getView(string $view){

        if (Route::$controller == "Home") {
            $view = $view . '.php';
        } else {
            $view = Route::$controller . '/' . $view . '.php';
        }

        require_once("../App/Views/Layouts/header.php");
        require_once("../App/Views/".$view);
        require_once("../App/Views/Layouts/footer.php");
    }
}
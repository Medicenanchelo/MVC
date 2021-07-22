<?php namespace App\Controllers;

use Core\Controller;

class Home extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        echo "Index Controlador Home: LISTO!! <br>";
        $this->view->getView('index');
    }
}
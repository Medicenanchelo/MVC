<?php namespace Controllers;

use Core\Controller;

class Home extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        echo "index de Home";
    }
}
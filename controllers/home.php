<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->views->getViews($this,$this->role,'inicio');
    }
}

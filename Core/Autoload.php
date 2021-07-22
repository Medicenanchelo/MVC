<?php
spl_autoload_register(function ($clase){
    $autoload = str_replace('\\','/',$clase.'.php');
    $autoload = "../".$autoload;
    require_once ($autoload);
});
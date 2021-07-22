<?php
spl_autoload_register(function ($clase){
    echo "llamando a:".$clase."<br>";
    $autoload = str_replace('\\','/',$clase.'.php');
    $autoload = "../".$autoload;
    require_once ($autoload);
});

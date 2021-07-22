<?php namespace Core;

class Route{

    static $url;
    static $arrUrl;
    static $controller;
    static $method;
    static $params;
    static $home = 'Home/index';

    static function getUrl(){
        self::$url = !empty($_GET['url']) ? $_GET['url'] : self::$home;
        self::$arrUrl = explode("/", self::$url);
        self::$controller = ucfirst(strtolower(self::$arrUrl[0]));
        self::$method = !empty(self::$arrUrl[1]) ? self::$arrUrl[1] : 'index';
        self::$params = self::$arrUrl[2];
        if (!empty($arrUrl[2])) {
            if ($arrUrl[1] != "") {
                for ($i = 2; $i < count($arrUrl); $i++) {
                    self::$params .= $arrUrl[$i] . ',';
                }
                self::$params = trim(self::$params, ',');
            }
        }
    }

}
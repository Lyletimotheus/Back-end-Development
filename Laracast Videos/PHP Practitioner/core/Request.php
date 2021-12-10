<?php

class Request 
{
    public static function uri() 
    {
        // If we want to return the following URI: names?name=;Lyle, BUT we trim the ?name=Lyle part of the URI
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        // return trim($_SERVER['REQUEST_URI'], '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD']; // This will give us GET or POST types 
    }
}
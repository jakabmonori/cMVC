<?php

class Bootstrap
{
    public function __construct()
    {

        $url = $_GET["url"];
        $url = explode('/', $url);

        /*
        * If the main (index.php) page is called
        * it puts a second .php after the url
        * calling index.php.php
        * This 'if' solves that
        */
        if ($url[0] == "index.php") {
            $url[0] = substr($url[0], 0, -4);
        }

        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)) {
            require $file;
        }
        else {
            require 'controllers/error.php';
            new ErrorHandler();
            return false;
        }
        $controller = new $url[0];

        /*
        * $url[0] is the page's controller
        * $url[1] is a function inside the controller, if there's one
        * $url[2] is a parameter for the function inside the controller
        *
        * we are checking if there is a third item in the array (Are there any parameters to give to the function?)
        * if not then check if there is a second item (Are we calling a function?)
        */
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }
}

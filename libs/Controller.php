<?php

class Controller
{
    # Main controller
    function __construct() {
        echo "We are in the main controller<br>";
        $this->view = new View();
    }
}
<?php

class ErrorHandler extends Controller
{
    function __construct() {
        parent::__construct();
        $errorMsg = '<h2 style="font-weight: bold;">The requested page does not exist.</h2>';
        print_r ($errorMsg);
    }
    
}
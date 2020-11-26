<?php

class Test extends Controller
{
    public function __construct() {
        parent::__construct();
        echo "This is test.php";
    }


    
    public function other($var) {
        echo "<br>This is other";
        echo "<br>".$var;
    }
}
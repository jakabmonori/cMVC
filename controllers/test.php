<?php

class Test
{
    public function __construct() {
        echo "This is test.php";
    }


    
    public function other($var) {
        echo "<br>This is other";
        echo "<br>".$var;
    }
}
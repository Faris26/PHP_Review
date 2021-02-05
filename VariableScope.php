<?php 
$x = 10;

//SupperGlobals
// $__GET $_POST $_REQUEST $_SESSION $_COOKIE $_SERVER $_ENV
//Merupakan Array Assosiative

var_dump($_SERVER);

function tampilX(){
    global $x;
    $x = 20;
    echo $x;
}

tampilX();
?>
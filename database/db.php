<?php

$host = "localhost";
$username = "root";
$password = "PinkyLu2$hop";
$db_name = "users";

$connection = new mysqli($host,$username,$password,$db_name);

if( !$connection ){
    die("Database Not Found!");
}

?>
